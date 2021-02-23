<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Curso extends Model
{
    use HasFactory;


    public function users(){
        return $this->BelongsToMany(User::class);
    }

    public function examen(){
        return $this->belongsToMany(Examen::class);
    }

}
