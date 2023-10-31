<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDriverInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver1_name',
        'driver1_cin',
        'driver1_license',
        'reservation_id',
        'car_id',
        'driver2_name',
        'driver2_cin',
        'driver2_license',
    ];
    
}
