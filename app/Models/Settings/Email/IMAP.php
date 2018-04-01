<?php
/**
 * An Eloquent model describing the IMAP server settings for connecting to an IMAP server.
 *
 * @since 0.1
 * @author Chris van Zanten <c.vanzanten@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace App\Models\Settings\Email;

use App\Classes\IServerable;
use App\Models\Ticket\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Webklex\IMAP\Client;
use App\Models\Ticket\Message\Email;

/**
 * Class IMAP
 *
 * @package App\Models\Settings\Email
 * @property int $id
 * @property string $host
 * @property int $port
 * @property string $encryption
 * @property bool $validate_cert
 * @property string $username
 * @property string $password
 * @mixin \Eloquent
 */
class IMAP extends Model implements IServerable
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings_email_imap';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'host', 'port', 'encryption', 'validate_cert', 'username', 'password'
    ];

    /**
     * Obtains the App\Models\Settings\Email that morphs to this App\Models\Settings\Email\IMAP.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function email()
    {
        return $this->morphOne('App\Models\Settings\Email', 'email_settingable');
    }

    /**
     * Obtains all the emails from the target mailbox and either archives or deletes the original messages.
     *
     * @param string $mailBox - The mailbox from which to obtain all the emails.
     * @param bool $useArchive - true: Archives original emails to the provided archive box; false: Deletes the original emails.
     * @param string $archiveBox - The archive box name.
     * @return Collection - A Collection of Ticket\Message\Email objects reflecting the emails obtained from the server.
     * @throws \Exception
     * @throws \Throwable
     * @throws \Webklex\IMAP\Exceptions\ConnectionFailedException
     * @throws \Webklex\IMAP\Exceptions\GetMessagesFailedException
     * @throws \Webklex\IMAP\Exceptions\MessageSearchValidationException
     */
    public function getEmailsFromMailBox(string $mailBox, bool $useArchive = true, string $archiveBox = "archive")
    {
        $client = new Client([
            'host'          => $this->host,
            'port'          => $this->port,
            'encryption'    => $this->encryption,
            'validate_cert' => $this->validate_cert,
            'username'      => $this->username,
            'password'      => $this->password,
        ]);

        $client->connect();
        $folder = $client->getFolder($mailBox);
        $IMAPMessages = $folder->getMessages();
        $emails = array();

        foreach($IMAPMessages as $IMAPMessage)
        {
            $from = $IMAPMessage->getFrom();

            $data = new \stdClass();
            $data->messageID = $IMAPMessage->getMessageID();
            $data->sender = $IMAPMessage->getSender();
            $data->to = $IMAPMessage->GetTo();
            $data->CC = $IMAPMessage->getCC();
            $data->BCC = $IMAPMessage->getBCC();
            $data->rawHeader = $IMAPMessage->getHeader();
            $data->rawBody = $IMAPMessage->getRawBody();

            $email = new Email([
                $from[0]->mail,         // email address
                $from[0]->personal,     // email name
                $IMAPMessage->getSubject(),
                $IMAPMessage->getTextBody(),
                $IMAPMessage->getDate(),
                json_encode($data)
            ]);

            DB::transaction(function() use(&$email)
            {
                $message = new Message();
                $message->ticket_id = -1;
                $email->save();
                $email->message()->save($message);
            }, 3);

            if ($email->exists)
            {
                if ($useArchive) $IMAPMessage->moveToFolder($archiveBox);
                else $IMAPMessage->delete();
                $emails[] = $email;
            }
        }

        return collect($emails);
    }
}