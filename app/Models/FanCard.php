<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FanCard extends Model
{
    use HasFactory;

    protected $table = 'fanCardSubscription';

    protected $fillable = [
        'full_name',
        'job_title',
        'gender',
        'phone_number',
        'email',
        'street_address',
        'zip_code',
        'country',
        'fanID',
        'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Bookings::class, 'fanID', 'fanID');
    }
}
