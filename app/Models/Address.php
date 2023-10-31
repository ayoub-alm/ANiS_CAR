<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'full_name',
        'address_line_1',
        'address_line_2',
        'zip_code',
        'long',
        'lat',
        'city_id',
    ];
}
