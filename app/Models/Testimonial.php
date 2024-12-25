<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //

    protected $table = [
        'testimonial_unique_id',
        'boarding_house_uid',
        'photo',
        'content',
        'rating'
    ];
}
