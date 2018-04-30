<?php
/**
 * An Interface used by App\Models\Settings\Email\* models for the purpose of forcing the relation to have a
 * getEmailsFromMailBox() which can then be accessed from the parent App\Models\Settings\Email class.
 *
 * @since 0.1
 * @author Chris van Zanten <c.vanzanten@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace App\Classes;

use Illuminate\Support\Collection;

interface IServerable
{
    /**
     * Obtains all the emails from the target mailbox and either archives or deletes the original messages.
     * Saves the email information into a new App\Models\Tickets\Messages\Email object for each email found.
     *
     * @param string $mailBox - The mailbox from which to obtain all the emails.
     * @param bool $useArchive - true: Archives original emails to the provided archive box; false: Deletes the original emails.
     * @param string $archiveBox - The archive box name.
     */
    public function obtainEmailsInMailBox(string $mailBox, bool $useArchive = true, string $archiveBox = "archive");
}