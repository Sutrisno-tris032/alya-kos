<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'transaction_unique_id',
        'code',
        'boaording_house_uid',
        'room_unique_id',
        'name',
        'email',
        'phone_number',
        'payment_method',
        'payment_status',
        'start_date',
        'duration',
        'total_amount',
        'transaction_date',
        'snap_token'
    ];

    public function boardingHouse() {
        return $this->belongsTo(BoardingHouse::class);
    }

    public function room() {
        return $this->belongsTo(Room::class);
    }
}
