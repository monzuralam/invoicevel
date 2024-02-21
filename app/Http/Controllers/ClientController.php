<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(){
        
    }

    public function index():view{
        $clients = User::where('role', 'user')->get();
        return view('clients', compact('clients'));
    }

    public function create(){

    }
}