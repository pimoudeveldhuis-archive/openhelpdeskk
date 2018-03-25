<?php
/**
 * Elequent model for accounts
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Models\Account;
use App\Models\AccountSession;

class AccountController extends Controller
{
    /**
     * Displays the login form
     *
     * @return \Illuminate\View\View
     */
    public function render_login(Request $request)
    {
        return View('login');
    }
    
    /**
     * Handles the login POST
     *
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function do_login(Request $request)
    {
        $validator = $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        
        if(($account = Account::where('username', $request->input('username'))->first()) === null || !password_verify($request->input('password'), $account->password)) {
            if($account !== null)
                $account->log('login', ['success' => false]);
            
            return redirect('login')
                ->withErrors(['account' => 'The credentials you entered are incorrect.'])
                ->withInput();
        }
        
        $session = $account->create_session($request->ip());
        
        if($request->input('remember_me') === 'checked')
            Cookie::queue('openhelpdesk', $session->token, 44640);
        else
            Cookie::queue('openhelpdesk', $session->token);
        
        if($session->twofactor === null)
            return redirect()->route('dashboard');
        else
            return redirect()->route('twofactor');
    }
}
