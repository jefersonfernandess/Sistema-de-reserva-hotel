<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomImage;
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
            'price' => 'required',
            'status' => 'required',
            'img' => 'required'
        ]);
        
        if(!$validate) {
            return back()->with('fail', 'Não foi possível cadastrar');
        }
        
        $room = Room::create([
            'room_number' => $request->room_number,
            'room_description' => $request->room_description,
            'room_type' => $request->room_type,
            'price' => $request->price,
            'status' => $request->status
        ]);
        
        $imagePath = $request->file('img')->store('rooms');
        RoomImage::create([
            'room_id' => $room->id,
            'image_path' => $imagePath
        ]);

        return redirect()->route('room.index');
    }
}
