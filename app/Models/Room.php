<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'room_unique_id',
        'boarding_house_uid',
        'room_name',
        'square_feet',
        'price_per_month',
        'is_available'
    ];
}
