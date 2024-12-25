<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    //
    protected $table = [
        'bonus_unique_id',
        'boarding_house_uid',
        'name',
        'description'
    ];
}
