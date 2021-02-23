<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            "nombre"    =>  "1-ESO-E"
        ]);

        Curso::create([
            "nombre"    =>  "1-ESO-F"
        ]);

        Curso::create([
            "nombre"    =>  "1-ESO-G"
        ]);

        Curso::create([
            "nombre"    =>  "1-ESO-H"
        ]);
    }
}
