<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"    =>  "Alumno",
            "surname"  =>  "Alumno",
            "email"     =>  "alumno@gmail.com",
            "curso_id"  =>  1,
            "tipo_id"   =>  1,  
            "password"  =>  bcrypt("12345678")
        ]);

        User::create([
            "name"    =>  "Admin",
            "surname"  =>  "Admin",
            "email"     =>  "admin@gmail.com",
            "curso_id"  =>  1,
            "tipo_id"   =>  3,  
            "password"  =>  bcrypt("12345678")
        ]);

        User::create([
            "name"    =>  "Profe",
            "surname"  =>  "Profe",
            "email"     =>  "profe@gmail.com",
            "curso_id"  =>  1,
            "tipo_id"   =>  2,   
            "password"  =>  bcrypt("12345678")
        ]);
    }
}
