<?php

namespace Database\Seeders;

use App\Models\Respuesta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestasSeeder extends Seeder
{

    private $respuestas = array(

        // ------------------ Pregunta 4.1 ------------------------------ 
         array(
             "pregunta_id" => 1,
             "respuesta" => 'FISH',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 1,
             "respuesta" => 'AMPHIBIANS',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 1,
             "respuesta" => 'REPTILES',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 1,
             "respuesta" => 'BIRDS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 1,
             "respuesta" => 'MAMMALS',
             "correcto" => false
         ),
 
         // ------------------ Pregunta 4.2 ------------------------------ 
 
         array(
             "pregunta_id" => 2,
             "respuesta" => 'FISH',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 2,
             "respuesta" => 'AMPHIBIANS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 2,
             "respuesta" => 'REPTILES',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 2,
             "respuesta" => 'BIRDS',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 2,
             "respuesta" => 'MAMMALS',
             "correcto" => false
         ),
 
         // ------------------ Pregunta 4.3 ------------------------------ 
 
         array(
             "pregunta_id" => 3,
             "respuesta" => 'FISH',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 3,
             "respuesta" => 'AMPHIBIANS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 3,
             "respuesta" => 'REPTILES',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 3,
             "respuesta" => 'BIRDS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 3,
             "respuesta" => 'MAMMALS',
             "correcto" => false
         ),
 
         // ------------------ Pregunta 4.4 ------------------------------ 
 
         array(
             "pregunta_id" => 4,
             "respuesta" => 'FISH',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 4,
             "respuesta" => 'AMPHIBIANS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 4,
             "respuesta" => 'REPTILES',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 4,
             "respuesta" => 'BIRDS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 4,
             "respuesta" => 'MAMMALS',
             "correcto" => false
         ),
 
         // ------------------ Pregunta 4.5 ------------------------------ 
 
         array(
             "pregunta_id" => 5,
             "respuesta" => 'FISH',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 5,
             "respuesta" => 'AMPHIBIANS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 5,
             "respuesta" => 'REPTILES',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 5,
             "respuesta" => 'BIRDS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 5,
             "respuesta" => 'MAMMALS',
             "correcto" => true
         ),
 
         // ------------------ Pregunta 5 ------------------------------ 
 
         array(
             "pregunta_id" => 6,
             "respuesta" => 'Fish: shark, salmon, tuna, dolphin.',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 6,
             "respuesta" => 'Amphibians: forg, newt, salamander, toad.',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 6,
             "respuesta" => 'Mammals: bat, tiger, human, elephant.',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 6,
             "respuesta" => 'Reptiles: snake, turtle, lizard, crocodile.',
             "correcto" => false
         ),
 
         // ------------------ Pregunta 6 ------------------------------ 
 
         array(
             "pregunta_id" => 7,
             "respuesta" => 'They all have an internal skeleton that includes a backbone.',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 7,
             "respuesta" => 'Theri bodies have three main parts: a head, a trunk and a tail.',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 7,
             "respuesta" => 'They have bilateral symmetry',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 7,
             "respuesta" => 'Al the statements above are right',
             "correcto" => true
         ),
 
         // ------------------ Pregunta 7 ------------------------------ 
 
         array(
             "pregunta_id" => 8,
             "respuesta" => 'Their bodies are covered in scales for protection',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 8,
             "respuesta" => 'They have a powerful tail and fins which help them to swim',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 8,
             "respuesta" => 'They are warm-blooded animals',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 8,
             "respuesta" => 'Their skeleton is made of bones or cartilage',
             "correcto" => false
         ),
 
         // ------------------ Pregunta 8 ------------------------------ 
 
         array(
             "pregunta_id" => 9,
             "respuesta" => 'Tadpoles breathe through gills and adults breathe through lungs',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 9,
             "respuesta" => 'They are cold-blooded animals',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 9,
             "respuesta" => 'They only live in terrestrial ecosystems',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 9,
             "respuesta" => 'Their offspring undergo metamorphosis to become adults',
             "correcto" => false
         ),
 
         // ------------------ Pregunta 9 ------------------------------ 
 
         array(
             "pregunta_id" => 10,
             "respuesta" => 'They are cold-blooded animals. Their body temperature depends on the enviroment.',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 10,
             "respuesta" => 'Their bodies are covered in scales to protect them from wet climates.',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 10,
             "respuesta" => 'They have sexual reproduction. Most of them lay eggs on land.',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 10,
             "respuesta" => 'Reptiles eggs have a protective shell.',
             "correcto" => false
         ),
 
         // ------------------ Pregunta 10 ------------------------------ 
 
         array(
             "pregunta_id" => 11,
             "respuesta" => 'They are cold-blooded animals. Their body temperature depends on the enviroment.',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 11,
             "respuesta" => 'They are not warm-blooded animals.',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 11,
             "respuesta" => 'They have a break, but don´t have teeth.',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 11,
             "respuesta" => 'They are covered in feathers',
             "correcto" => false
         ),
 
         // ------------------ Pregunta 11 ------------------------------ 
 
         array(
             "pregunta_id" => 12,
             "respuesta" => 'They breathe through lungs.',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 12,
             "respuesta" => 'They reproduce by sexual reproduction. They lag eggs.',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 12,
             "respuesta" => 'Female mammals produce milk.',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 12,
             "respuesta" => 'Mst of them have four legs and their bodies are covered with fur.',
             "correcto" => false
         ),
 
         // --------------------------- Pregunta 12 ----------------------------------------
 
             // 12.1
         array(
             "pregunta_id" => 13,
             "respuesta" => 'FISH',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 13,
             "respuesta" => 'AMPHIBIANS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 13,
             "respuesta" => 'REPTILES',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 13,
             "respuesta" => 'BIRDS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 13,
             "respuesta" => 'MAMMALS',
             "correcto" => false
         ),
 
         // 12.2
         array(
             "pregunta_id" => 14,
             "respuesta" => 'FISH',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 14,
             "respuesta" => 'AMPHIBIANS',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 14,
             "respuesta" => 'REPTILES',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 14,
             "respuesta" => 'BIRDS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 14,
             "respuesta" => 'MAMMALS',
             "correcto" => false
         ),
 
         // 12.3
         array(
             "pregunta_id" => 15,
             "respuesta" => 'FISH',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 15,
             "respuesta" => 'AMPHIBIANS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 15,
             "respuesta" => 'REPTILES',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 15,
             "respuesta" => 'BIRDS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 15,
             "respuesta" => 'MAMMALS',
             "correcto" => false
         ),
 
         // 12.4
 
         array(
             "pregunta_id" => 16,
             "respuesta" => 'FISH',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 16,
             "respuesta" => 'AMPHIBIANS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 16,
             "respuesta" => 'REPTILES',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 16,
             "respuesta" => 'BIRDS',
             "correcto" => true
         ),
         array(
             "pregunta_id" => 16,
             "respuesta" => 'MAMMALS',
             "correcto" => false
         ),
 
         // 12.5
 
         array(
             "pregunta_id" => 17,
             "respuesta" => 'FISH',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 17,
             "respuesta" => 'AMPHIBIANS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 17,
             "respuesta" => 'REPTILES',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 17,
             "respuesta" => 'BIRDS',
             "correcto" => false
         ),
         array(
             "pregunta_id" => 17,
             "respuesta" => 'MAMMALS',
             "correcto" => true
         )
 
     );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Self::loadRespuestas();
    }

    private function loadRespuestas(){
        DB::table('respuestas')->delete();

        foreach ($this->respuestas as $rp) {
            $temp = new Respuesta($rp);
            $temp->save();
        }
    }
}
