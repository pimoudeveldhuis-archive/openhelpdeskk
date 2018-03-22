<?php
/**
 * Elequent model for ticket messages
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketMessage
 */
class TicketMessage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ticket_id'
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    
    /**
     * Obtain the Messageable that morphs to this TicketMessage.
     *
     * @return mixed
     */
    public function messageable()
    {
        return $this->morphTo();
    }
}
