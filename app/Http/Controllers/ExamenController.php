<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;

class ExamenController extends Controller
{

    //  Alumno: Devolverá la prueba a realizar
    //  Profesor: Devlverá el listado de exámenes de ese profesor
    //  Administrador: Devolverá el listado de exámenes de todos los profesores
    public function getIndex(){

    }

    //  El profesor obtendrá el formulario para crear un examen
    public function getFormExamen(){

    }

    //  Recogerá los datos del examen a crear y lo añadirá a la BBDD
    public function createExamen(Request $request){

    }
    //  El profesor obtendrá los exámenes realizado por el alumno (las respuestas) y devolverá la vista del resultado
    public function getExamenesAlumno( Request $request ){

    }

    //  El profesor obtendrá todos los alumnos y notas que han realizado ese examen
    public function getResultadosExamen( $idExamen ){

    }

}
