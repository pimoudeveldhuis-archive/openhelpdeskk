<?php
/**
 * Elequent model for tickets
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 */
class Ticket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid', 'subject', 'department_id', 'owner_account_id'
    ];
    
    public function messages() {
        return $this->hasMany('App\Models\TicketMessage');
    }
}
