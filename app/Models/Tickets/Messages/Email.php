<?php
/**
 * Eloquent model for ticket messages that are created via email
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
 
namespace App\Models\Tickets\Messages;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Email
 *
 * @property int $id
 * @property string $from_name
 * @property string $from_email
 * @property string $subject
 * @property string $message
 * @property \Carbon\Carbon $sent_on
 * @property string $data
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @mixin \Eloquent
 */
class Email extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tickets_messages_emails';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_name', 'from_email', 'subject', 'message', 'sent_on', 'data'
    ];

    /**
     * Returns the TicketMessage the morphable TicketMessageEmail belonged too.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function message()
    {
        return $this->morphOne('App\Models\Ticket\Message', 'messageable');
    }
}
