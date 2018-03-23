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
}
