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

use App\Models\Settings\Emails\Server;
use App\Models\Ticket;
use App\Models\Tickets\Messages\Email;
use Illuminate\Database\Eloquent\Builder;

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
     * Finds all orphaned App\Models\Tickets\Messages\Email objects and tries to assign them to an existing or
     * newly created App\Models\Ticket.
     * A newly created App\Models\Ticket will be assigned to a App\Models\Department depending on the rules set in [TODO: Update doc.]
     */
    public static function assignEmailsToTickets()
    {
        $emails = Email::whereHas('message', function(Builder $message)
        {
            $message->whereNull('ticket_id');
        })->get();

        foreach ($emails as $email)
        {
            // TODO: Determine if an Email should be assigned to an existing Ticket.

            // TODO: Check which Department a newly created Ticket belongs to.

        }
    }
}
