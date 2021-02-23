<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    //agrego esta linea para solucionar el error con los plurales... el busca examens
    protected $table = 'examenes';
    //

    public function Users(){
        return $this->belongsTo(User::class);
    }

    public function cursos(){
        return $this->hasOne(Curso::class);
    }
}
