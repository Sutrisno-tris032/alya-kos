<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    //
    use HasFactory;
    protected $table = [
        'bonus_unique_id',
        'boarding_house_uid',
        'name',
        'description'
    ];

    public function boardingHouse() {
        return $this->belongsTo(BoardingHouse::class);
    }
}
