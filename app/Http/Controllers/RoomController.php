<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index() {
        $rooms = Room::get();
        return view('site.room.index', compact('rooms'));
    }

    public function createRoom() {
        return view('site.room.create');    
    }

    public function storeRoom(Request $request) {
        
        $validate = $request->validate([
            'room_number' => 'required',
            'room_description' => 'required',
            'room_type' => 'required',
            'status' => 'required',
        ]);

        if(!$validate) {
            return back()->with('erro', 'Não foi possível cadastrar');
        }

        Room::create($request->all());
        return redirect()->route('room.index');
    }
}
