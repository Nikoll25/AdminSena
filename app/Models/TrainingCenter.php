<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    use HasFactory;

    //Relación de uno a muchos apuntando a Course
     public function courses(){
        return $this->hasMany('App\Models\course');
    }
    //relación uno a muchos apuntando a teacher
     public function teachers(){
        return $this->hasmany('App\Models\Teacher');
    }
}
