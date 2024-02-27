<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * register view
     *
     * @return void
     */
    public function index(){
        return view('auth.register');
    }

    /**
     * Register Data
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request){
        $data = $request->only('name', 'email');
        $data['password'] = Hash::make( $request->get('password') );

        User::insert($data);

        return redirect()->route('login');
    }
}
