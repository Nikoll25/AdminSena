<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'imagen_url',
        'imagen_public_id',
    ];

    //Relación de uno a muchos apuntando a Course
     public function courses(){
        return $this->hasMany('App\Models\course');
    }
    //relación uno a muchos apuntando a teacher
     public function teachers(){
        return $this->hasmany('App\Models\Teacher');
    }
        //relación uno a muchos apuntando a offer
     public function offers(){
        return $this->hasmany('App\Models\Offer');
    }
}
