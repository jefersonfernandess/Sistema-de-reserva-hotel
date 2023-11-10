<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('cliente.login');
    }

    public function loginStore(Request $request)
    {
        $validacao = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:5']
        ]);
        
        $authenticated = Auth::attempt($validacao);
        if(!$authenticated) 
        {
            return redirect()->back()->with('fail', 'Invalid email and/or password');
        }

        return redirect()->route('home.index');
        
    }
}
