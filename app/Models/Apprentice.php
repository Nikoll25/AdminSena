<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;
    //Relación uno a uno, creo una función que apunte a computer
      public function computer(){
        return $this->belongsTo('App\Models\Computer');
        }

    // Relación uno a muchos(Inversa) con course
     public function course(){
        return $this->belongsTo('App\Models\Course');
    }

}
