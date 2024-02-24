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

    /**
     * Create clients
     *
     * @return void
     */
    public function create():view{
        return view('clients-create');
    }

    /**
     * Save Client
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request){
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'password'  => 'required|min:8',
        ]);

        User::create($request->all());
        return redirect()->route('clients');
    }

    /**
     * Delete Clients
     *
     * @param init $id
     * @return void
     */
    public function destroy($id){
        $client = User::findOrFail($id);
        $client->delete();
        return redirect(route('clients'));
    }
}
