<?php

namespace App\Models;
use App\Models\CarCategory;
use App\Models\CarFullInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'name', // Add 'name' to the fillable attributes
        'img',
        'matricule',
        'state',
        'categorie_id',
        'price',
        // Other fillable attributes...
    ];


    public function categorie(){
        return $this->belongsTo( CarCategory::class );
    }


    public function fullDescription(){
        return $this->hasOne( CarFullInfo::class );
    }
   
    /**
     * Get all of the comments for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
   

}
