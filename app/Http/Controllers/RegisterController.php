<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('cliente.register');
    }

    public function registerStore(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ], [
            'name.required' => 'Esse campo é obrigatório!',
            'name.min' => 'O nome precisa ter no mínimo de 3 caracteres.',
            'email.required' => 'Esse campo é obrigatório!',
            'email.unique' => 'Esse email já está sendo usado.',
            'password.required' => 'Esse campo é obrigatório!',
            'password.min' => 'A senha precisa ter no mínimo de 5 caracteres.'
        ]);

        if (!$validation) {
            return redirect()->back()->with('fail', 'Não foi possível criar o usuário, tente novamente.');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request['password'] = Hash::make($request->password)
        ]);

        Auth::login($user);
        return redirect()->route('home.index');
        
    }
}
