<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\NivelEducacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('departamentos', DepartamentoController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('niveles-educacion', NivelEducacionController::class);

// Ruta para el reporte solicitado
Route::get('/reporte', [EmpleadoController::class, 'reporte'])->name('empleados.reporte');