<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;


    public function users(){
        return $this->belongsTo(User::class);
    }

    public function pruguntas(){
        return $this->hasMany(Prugunta::class);
    }

    public function examen(){
        return $this->belongsTo(Examen::class);
    }
/* 
    public function respuestas(){
        return $this->hasMany(Respuesta::class);
    }
 */
}
