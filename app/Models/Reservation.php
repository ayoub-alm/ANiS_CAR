<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public static $CREATED = 1 ;
    public static $ACCPTED =  2 ;
    public static $IN_RENTL = 3;
    public static $CLOSED = 4 ;

    protected $fillable = [
        'user_id',
        'car_id',
        'state',
        'rental_start_date',
        'rental_end_date',
        'rental_start_heure',
        'rental_end_heure',
        'total_cost',
        'payment_status',
        'payment_method',
        'kilometrage_start',
        'kilometrage_end',
    ];

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function drivers(){
        return $this->hasOne(CarDriverInfo::class);
    }

}
