<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flight extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'airline',
        'from',
        'to',
        'flight_start_time'
    ];

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
