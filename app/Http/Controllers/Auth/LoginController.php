<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Main view
     *
     * @return void
     */
    public function index(){
        return view('auth.login');
    }

    /**
     * Authenticate login
     *
     * @param Request $request
     * @return void
     */
    public function authenticate(Request $request){
        $data = $request->only('email', 'password');
        $remember = ! empty( $request->only('remember') ) ? $request->only('remember') : false;
        if( Auth::attempt( $data, $remember ) ){
            return redirect()->route('dashboard');
        }
    }

    /**
     * Log out
     *
     * @return void
     */
    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
