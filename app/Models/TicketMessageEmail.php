<?php
/**
 * Elequent model for ticket messages that are created via email
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketMessageEmail
 */
class TicketMessageEmail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_name', 'from_email', 'subject', 'message'
    ];
    
    /**
     * Returns the TicketMessage the morphable TicketMessageEmail belonged too.
     *
     * @return \App\Models\TicketMessage
     */
    public function message()
    {
        return $this->morphOne('App\Models\TicketMessage', 'messageable');
    }
}
