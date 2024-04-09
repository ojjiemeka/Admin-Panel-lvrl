<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'fanID',
        'celebrity_name',
        'event_date',
        'approx_budget',
        'event_type',
        'location',
        'additional_info',
        'nearest_airport',
    ];

    public function fan()
    {
        return $this->belongsTo(FanCard::class, 'fanID', 'fanID');
    }
}
