<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
