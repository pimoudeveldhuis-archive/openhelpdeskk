<?php
/**
 * A static class of functions that deal with emails.
 *
 * @since 0.1
 * @author Chris van Zanten <c.vanzanten@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace App\Classes;

use App\Helpers\TicketHelper;
use App\Models\Settings\Emails\Server;
use App\Models\Ticket;
use App\Models\Tickets\Messages\Email;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class EmailFunctions
{
    /**
     * For each email server, try to obtain any new emails.
     * Disables any server that returns an exception and creates a new log entry of the event.
     */
    public static function obtainEmailsFromServers()
    {
        $servers = Server::where('enabled', '=', true)->get();
        foreach ($servers as $server)
        {
            try
            {
                $server->obtainEmails();
            }
            catch (\Exception |\Throwable $e)
            {
                // An Exception|Throwable has been thrown, disable the server and create a new log entry.
                try
                {
                    $server->setEnabled(false);
                }
                catch (\Exception | \Throwable $e)
                {
                    // Could not update the state of the server, this is a fatal exception and the scheduler needs to be halted.
                    // TODO: Halt scheduler.
                }
                // TODO: Create a log entry.
            }
        }
    }

    /**
     * Finds all orphaned Email objects and tries to assign them to an existing or newly created Ticket.
     * A newly created Ticket will be assigned to a Department depending on the rules set in [TODO: Update doc.]
     */
    public static function assignEmailsToTickets()
    {
        $emails = Email::whereHas('message', function(Builder $message)
        {
            $message->whereNull('ticket_id');
        })->with('message')
          ->get();

        foreach ($emails as $email)
        {
            $ticketID = self::checkForExistingTicket($email);
            if ($ticketID !== null && Ticket::where('uid', '=', $ticketID)->exists())
            {
                // Assign the Email to the existing Ticket.
                $email->message->ticket_id = $ticketID;
                try
                {
                    DB::transaction(function () use (&$email)
                    {
                        $email->message->save();
                    }, 3);
                }
                catch(\Exception | \Throwable $e)
                {
                    // TODO: Log this exception.
                }
            }
            else
            {
                // Create a new Ticket for the Email.
                try
                {
                    $uid = TicketHelper::createUid();
                    $ticket = new Ticket();
                    $ticket->uid = $uid;
                    $ticket->subject = $email->subject;
                    $ticket->department_id = self::findMatchingDepartment($email);
                    $email->message->ticket_id = $uid;

                    DB::transaction(function () use (&$email, &$ticket)
                    {
                        $ticket->save();
                        $email->message->save();
                    }, 3);
                }
                catch (\Exception | \Throwable $e)
                {
                    // TODO: Log this exception.
                }
            }
        }
    }

    /**
     * Checks the provided Email object for an existing Ticket UID in the subject or in the body should no matches be
     * found in the subject.
     *
     * @param Email $email An Email object containing a valid subject and body.
     * @return mixed An identifier string should a match be found, or null if otherwise.
     */
    private static function checkForExistingTicket(Email $email)
    {
        // Check if the email has a ticket uid in its subject or body.
        if (preg_match('/\(ID:(?P<id>[A-Z1-9]+)\)/i', $email->subject, $matches) ||
            preg_match('/\(ID:(?P<id>[A-Z1-9]+)\)/i', $email->body, $matches))
        {
            return $matches['id'];
        }
        return null;
    }

    /**
     * Tries to find the Department that the provided Email object should be assigned to.
     * The default Department is always 0.
     *
     * @param Email $email An Email object.
     * @return int The ID of an Department.
     */
    private static function findMatchingDepartment(Email $email)
    {
        // TODO: Try to find a suitable Department.
        return 0;
    }
}
