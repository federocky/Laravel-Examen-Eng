<?php

namespace Database\Seeders;

use App\Models\Examen;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Examen::create([
            "fecha"         =>  Carbon::now(),
            "asignatura"    =>  "Biología",
            "user_id"       =>  2,
            "curso_id"      =>  1
        ]);
    }
}
