<?php
/**
 * AccountController to handle the login, logout, twofactor and password reset
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class DashboardController
 */
class DashboardController extends Controller
{
    public function render()
    {
        return View('dashboard');
    }
}
