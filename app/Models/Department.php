<?php
/**
 * Elequent model for departments
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 */
class Department extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lead_account_id'
    ];
    
    /**
     * Returns the lead account
     *
     * @return \App\Model\Account
     */
    public function lead_account()
    {
        return $this->belongsTo('App\Models\Account');
    }
    
    /**
     * Retrieve a list of accounts that are part of this department
     *
     * @return array
     */
    public function accounts()
    {
        return $this->belongsToMany('App\Models\Account');
    }
}
