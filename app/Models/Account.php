<?php
/**
 * Elequent model for accounts
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Ramsey\Uuid\Uuid;

use App\Models\AccountLog;
use App\Models\AccountSession;

/**
 * Class Account
 */
class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'name', 'email'
    ];
    
    /**
     * Retrieve all departments of which this account is a member
     *
     * @return array
     */
    public function departments()
    {
        return $this->belongsToMany('App\Models\Department');
    }
    
    /**
     * Logs a user action to the log database
     *
     * @param string $action Action enumeration
     * @param array $args Array of extra arguments to log
     * @return void
     */
    public function log(string $action, array $args)
    {
        AccountLog::create(['account_id' => $this->id, 'action' => $action, 'args' => $args]);
    }
    
    /**
     * Creates a user session upon login
     *
     * @param string $ip IP address to bind to the session
     * @return \App\Models\AccountSession
     */
    public function create_session(string $ip)
    {
        self::log('login', ['success' => true]);
        return AccountSession::create(['account_id' => $this->id, 'token' => Uuid::uuid4()->toString(), 'twofactor' => ($this->twofactor !== null) ? false : null, 'ip_address' => $ip]);
    }
}
