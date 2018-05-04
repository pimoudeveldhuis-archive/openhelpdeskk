<?php
/**
 * System wide Ticket helper
 *
 * Several ticket helper functions such as a ticket uid generator
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;

use App\Models\Ticket;

/**
 * Class TicketHelper
 */
class TicketHelper
{
    /**
     * Creates a unique UID for the ticket, an exception will be raised when it couldn't create a unique key in 10 tries
     * 
     * @return string Unique UID
     */
    public static function createUid()
    {
        $runs = 0;
        $uid = null;

        while($uid === null && $runs < 10) {
            $uid = self::createRandomKey(7);
            if(Ticket::where('uid', $uid)->count() > 0) {
                $uid = null;
                $runs++;
            }
        }

        if($uid === null)
            throw new \Exception("No unique UID could be generated.");
        else
            return $uid;
    }

    /**
     * Generates a random key of given length
     * 
     * @param int $length The length of the key
     * @return string Generated key
     */
    private static function createRandomKey($length)
    {
        $key = '';
        $pool = array_merge(range(0,9), range('A', 'Z'));
    
        for($i=0; $i < $length; $i++) {
            $key .= $pool[mt_rand(0, count($pool) - 1)];
        }

        return $key;
    }
}
