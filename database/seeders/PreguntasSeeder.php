<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasSeeder extends Seeder
{

    private $preguntas = array(
        array(
            "pregunta" => '4.1 They need to keep their skin wet. They undergo metamorphosis.',
            "valor" => 2
        ),
        array(
            "pregunta" => '4.2 They lay eggs. They are warm-blooded animals.',
            "valor" => 2
        ),
        array(
            "pregunta" => '4.3 They are cold-blooded. Their body is covered in scales. They lay eggs on land.',
            "valor" => 2
        ),
        array(
            "pregunta" => '4.4 They breathe through gills. Their bodies are covered in scales.',
            "valor" => 2
        ),
        array(
            "pregunta" => '4.5 They give birth to live offspring. They breathe through lungs.',
            "valor" => 2
        ),
        array(
            "pregunta" => '5. Which of the following statement is not correct?',
            "valor" => 3
        ),
        array(
            "pregunta" => '6. Which of the following statement about vertebrates is not correct?',
            "valor" => 3
        ),
        array(
            "pregunta" => '7. Which of the following statement about fish is not correct?',
            "valor" => 3
        ),
        array(
            "pregunta" => '8. Which of the following statement about amphibians is not correct?',
            "valor" => 3
        ),
        array(
            "pregunta" => '9. Which of the following statement about reptiles is not correct?',
            "valor" => 3
        ),
        array(
            "pregunta" => '10. Which of the following statement about birds is not correct?',
            "valor" => 3
        ),
        array(
            "pregunta" => '11. Which of the following statement about mammals is not correct?',
            "valor" => 3
        ),
        array(
            "pregunta" => '12.1 Do they have scales, fins, use gills to breathe and live in water?',
            "valor" => 2
        ),
        array(
            "pregunta" => '12.2 Do they stay in or near water to keep their skin moist?',
            "valor" => 2
        ),
        array(
            "pregunta" => '12.3 Do they have scales and use lungs to breathe?',
            "valor" => 2
        ),
        array(
            "pregunta" => '12.4 Do they have feathers and use lungs to breathe?',
            "valor" => 2
        ),
        array(
            "pregunta" => '12.5 Which one does not identify with any of the others?',
            "valor" => 2
        ),


    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Self::loadPreguntas();
    }

    private function loadPreguntas(){
        DB::table('preguntas')->delete();

        foreach ($this->preguntas as $pr) {
            $temp = new Pregunta($pr);
            $temp->save();
        }
    }
}
