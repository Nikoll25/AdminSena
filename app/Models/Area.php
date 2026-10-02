<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    //relación de uno a muchos apuntando a teacher
     public function teacher(){
        return $this->hasMany('App\Models\Teacher');
    }
    //relación de uno a muchos apuntando a Course
     public function Courses(){
        return $this->hasMany('App\Models\Course');
    }
            //relación uno a muchos apuntando a offer
     public function offers(){
        return $this->hasmany('App\Models\Offer');
     }
}
