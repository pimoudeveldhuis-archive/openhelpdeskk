<?php
/**
 * An Eloquent model describing the IMAP server settings for connecting to an IMAP server.
 *
 * @since 0.1
 * @author Chris van Zanten <c.vanzanten@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace App\Models\Settings\Email\Servers;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IMAP
 *
 * @package App\Models\Settings\Emails\Servers
 * @property int id
 * @property string host
 * @property int port
 * @property string encryption
 * @property bool validate_cert
 * @property string username
 * @property string password
 */
class IMAP extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings_emails_servers_imaps';

    /**
     * No timestamps are used with this model.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'host', 'port', 'encryption', 'validate_cert', 'username', 'password'
    ];

    /**
     * Obtains the App\Models\Settings\Emails\Server that morphs to this App\Models\Settings\Emails\Servers\IMAP.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function server()
    {
        return $this->morphOne('App\Models\Settings\Emails\Server', 'serverable');
    }
}