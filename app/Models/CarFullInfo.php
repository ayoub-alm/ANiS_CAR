<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFullInfo extends Model
{
    use HasFactory;


    protected $fillable = [
        'model',
        'brand',
        'year',
        'price',
        'Fuel',
        'color',
        'Power_steering',
        'audio_input',
        'Sleeping_bags',
        'Transmission_type',
        'clim',
        'vitess_number',
        'dors_numbers',
        'description',
        'car_id',
    ];
}
