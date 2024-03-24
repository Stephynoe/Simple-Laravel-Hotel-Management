<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'email',
        'room',
        'checkin_date',
        'checkout_date',
        'lighting',
        'bedspread',
        'heater',
        'air_condition',
        'reservation_code',
        'total_amount',
        'reservation_created_at',
    ];
}

?>