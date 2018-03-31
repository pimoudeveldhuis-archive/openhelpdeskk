<?php
/**
 * An Eloquent model describing the IMAP server settings for connecting to an IMAP server.
 *
 * @since 0.1
 * @author Chris van Zanten <c.vanzanten@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace App\Models\Settings\EmailServers;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IMAP
 *
 * @package App\Models\Settings\EmailServers
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
    protected $table = 'settings_emailservers_imaps';

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
     * Obtains the App\Models\Settings\EmailServer that morphs to this App\Models\Settings\EmailServers\IMAP.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function emailserver()
    {
        return $this->morphOne('App\Models\Settings\EmailServer', 'emailserverable');
    }
}