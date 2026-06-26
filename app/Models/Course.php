<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

        protected $fillable = [
        'number',
        'day',
        'area_id',
        'training_center_id',
    ];
    
    //Relación uno a muchos
     public function apprentices(){
        return $this->hasMany('App\Models\Apprentice');
    }

    //relación de uno a muchos(inversa) con trainingCenter
     public function trainingCenter(){
        return $this->belongsTo('App\Models\TrainingCenter');
    }
    
    //relación de uno a muchos(inversa) con area
     public function area(){
        return $this->belongsTo('App\Models\Area');
    }
     
    //relación de muchos a muchos
     public function teachers(){
        return $this->belongsToMany('App\Models\Teacher');
    }
}
