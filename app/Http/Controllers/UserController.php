<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userProfile() {
        $userData = Auth::user();
        return view('cliente.profile', compact('userData'));
    }
}
