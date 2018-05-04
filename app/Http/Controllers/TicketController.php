<?php
/**
 * The TicketController handles most Ticket functionality like searching, reading and creating tickets
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class TicketController
 */
class TicketController extends Controller
{
    /**
     * Basic overview of the tickets
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return View('tickets.index');
    }
}
