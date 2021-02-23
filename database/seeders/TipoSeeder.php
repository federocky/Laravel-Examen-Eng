<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create([
            "tipo"    =>  "Alumno"
        ]);

        Tipo::create([
            "tipo"    =>  "Profesor"
        ]);

        Tipo::create([
            "tipo"    =>  "Admin"
        ]);
    }
}
