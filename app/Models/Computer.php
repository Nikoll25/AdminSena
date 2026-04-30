<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    //Relación uno a uno que apunte a aprentice
      public function apprentice(){
        return $this->hasOne('App\Models\Apprentice');
      }

}
