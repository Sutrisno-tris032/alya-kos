<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    //
    protected $table = [
        'image_unique_id',
        'room_unique-id',
        'image_url'
    ];
}
