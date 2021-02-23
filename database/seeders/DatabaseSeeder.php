<?php

namespace Database\Seeders;

use App\Models\Examen;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CursoSeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ExamenSeeder::class);
        $this->call(PreguntasSeeder::class);
        $this->call(RespuestasSeeder::class);
        //$this->call(PruebaSeeder::class);
    }
}
