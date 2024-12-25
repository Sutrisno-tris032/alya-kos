<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    //
    use HasFactory;
    protected $table = [
        'image_unique_id',
        'room_unique-id',
        'image_url'
    ];

    public function room() {
        return $this->belongsTo(Room::class);
    }
}
