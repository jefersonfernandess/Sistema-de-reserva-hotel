<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'room_number',
        'room_description',
        'room_type',
        'status',
        'price'
    ];

    public function RoomImage() {
        return $this->hasMany(RoomImage::class, 'room_id', 'id');
    }
}
