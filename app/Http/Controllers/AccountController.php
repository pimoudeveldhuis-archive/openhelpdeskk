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
use Illuminate\Support\Facades\Cookie;

use PragmaRX\Google2FA\Google2FA;

use App\Models\Account;
use App\Models\AccountSession;

/**
 * Class AccountController
 */
class AccountController extends Controller
{
    /**
     * Displays the login form
     *
     * @param \Illuminate\Http\Request $request
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
    
    /**
     * Displays the twofactor form
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function render_twofactor(Request $request)
    {
        return View('twofactor');
    }
    
    /**
     * Handles the login POST
     *
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function do_twofactor(Request $request)
    {
        $validator = $this->validate($request, [
            'twofactor' => 'required'
        ]);
                
        $google2fa = new Google2FA();
        if($google2fa->verifyKey($this->_account->twofactor, $request->input('twofactor'), 8)) {
            $this->_account->log('twofactor', ['success' => true]);
            return redirect('dashboard');
        }
        
        $this->_account->log('twofactor', ['success' => false]);
        return redirect('twofactor')->withErrors(['twofactor' => 'The two-factor code you entered is incorrect']);
    }
}
