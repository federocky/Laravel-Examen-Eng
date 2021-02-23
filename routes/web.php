<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//  Exámenes

//  Ruta que si no has hecho el examen te mostrará la prueba
//  Si la has hecho te mostrará tu resultado en esa prueba
Route::get('/examen/:id', 'ExamenController@getIndex');

//  Ruta a la que accederá el/la profesor/a para crear y fijar fecha de un examen
Route::get('/examen/create', 'ExamenController@getFormExamen');

//  Ruta a la que se mandarán los datos para crear un examen
Route::post('/examen/create', 'ExamenController@createExamen');

//  Ruta a la que accederá el profesor para ver los examenes de un alumno
Route::get('/examen/:idExamen', 'ExamenController@getResultadosExamen');

//  Ruta a la que accederá el profesor para ver los examenes de un alumno
Route::get('/examen/alumnos/:idAlumno', 'ExamenController@getExamenesAlumno');
