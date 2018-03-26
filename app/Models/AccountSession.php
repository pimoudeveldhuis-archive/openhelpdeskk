<?php
/**
 * Elequent model for sessions
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccountSession
 */
class AccountSession extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'twofactor' => 'boolean',
    ];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'token', 'twofactor', 'ip_address'
    ];
    
    /**
     * Get the account of this session
     *
     * @return \App\Models\Account
     */
    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }
}
