<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;
        protected $fillable = [
        'name',
        'description',
        'modality',
        'startDate',
        'endDate',
        'quota',
        'area_id',
        'training_center_id',
    ];
     protected $guarded = [
        'urlFoto'
    ];


    //Relación uno a muchos(inversa) con trainingCenter
     public function trainingCenter(){
        return $this->belongsTo('App\Models\TrainingCenter');
    }
    //relación uno a muchos(inversa) con area
     public function area(){
        return $this->belongsTo('App\Models\Area');
    }
}
