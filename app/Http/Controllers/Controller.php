<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Cookie;

use App\Models\AccountSession;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected $_account;
    
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Cookie::has('openhelpdesk'))
                $this->_account = AccountSession::where('token', Cookie::get('openhelpdesk'))->first()->account;
            
            if($this->_account !== null)
                view()->share('_account', $this->_account);
            elseif($request->is('login') === false && $request->is('api*') === false)
                return redirect()->route('login');
            
            return $next($request);
        });
    }
}
