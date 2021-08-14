<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PrincipalController;
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

// Route::get('/', function () {   // https://sisdental.test/
//     return view('welcome');
// });

// Route::get('/hola/{nombre}', function ($nombre) { // https://sisdental.test/hola/juan
//     echo "Hola $nombre, como estas?";
// });

Route::get('/bienvenido/{nombre}', [PrincipalController::class, 'bienvenido']);
// Route::get('/paciente/crearregistro', [PacienteController::class, 'crearRegistro']);

// ----------- RUTAS PARA CONTROLADOR DE PACIENTES

// Ruta para  mostrar formulario de creacion de paciente
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');

// Ruta para guardar datos de paciente en la DB
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');

// Ruta para listar todos los pacientes
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');





// --------------------------------
// function factorial($n) {
//     $r = 1;
//     while ($n > 0) {
//         $r = $r * $n;
//         $n--;
//     }
//     return $r;
// }
