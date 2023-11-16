<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $userData = Auth::user();
        $rooms = Room::with('RoomImage')->get();
        return view('site.home', compact('userData', 'rooms'));
    }
}
