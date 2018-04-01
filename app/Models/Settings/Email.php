<?php
/**
 * An Eloquent model describing settings used for an e-mail server.
 * Is the target for morphTo relations from models that provide more specific settings for the target protocol.
 * For example: IMAP.
 *
 * @since 0.1
 * @author Chris van Zanten <c.vanzanten@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace App\Models\Settings;

use App\Classes\IServerable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Email
 *
 * @package App\Models\Settings
 * @property int $id
 * @property string $name
 * @property boolean $delete_original
 * @property string $inbox_name
 * @property boolean $use_archive
 * @property string $archive_name
 * @property-read IServerable email_settingable
 * @mixin \Eloquent
 */
class Email extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'setting_email';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'delete_original', 'inbox_name', 'use_archive', 'archive_name'
    ];

    /**
     * Obtain the email_settingable that morphs to this App\Models\Settings\Email.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function email_settingable()
    {
        return $this->morphTo();
    }

    /**
     * Gets all the email that resides on the related server.
     *
     * @return \Illuminate\Support\Collection - A Collection of Ticket\Message\Email objects reflecting the emails obtained from the server.
     * @throws \Exception - Various Exceptions may be thrown depending on the underlying implementation of the IServerable interface.
     * @throws \Throwable - Various Throwables may be thrown depending on the underlying implementation of the IServerable interface.
     */
    public function getEmail()
    {
        $server = $this->email_settingable;
        return $server->getEmailsFromMailBox(
            $this->inbox_name,
            $this->use_archive,
            $this->archive_name);
    }
}