<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeusuarioController;
use App\Http\Controllers\NutricionController;
use App\Http\Controllers\MiProgresoController;

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


Route::get('/Login', [LoginController::class, 'verlogin']);
Route::get('/Register', [LoginController::class, 'verregister']);

Route::get('/HomeUsuario', [HomeusuarioController::class, 'verhomeusuario']);
Route::get('/Inicio', [HomeusuarioController::class, 'verinicio']);

Route::get('/Nutricion', [NutricionController::class, 'vernutricion']);
Route::get('/formulario-edad', [NutricionController::class, 'verformedad']);
Route::get('/formulario-meta', [NutricionController::class, 'verformmeta']);
Route::get('/formulario-tipo', [NutricionController::class, 'verformtipo']);
Route::get('/formulario-datosnutri', [NutricionController::class, 'verformdatosnutricionales']);
Route::get('selec-nutricionista', [NutricionController::class, 'vernutricionistas']);

Route::get('/Recetas', [HomeusuarioController::class, 'verrecetas']);

Route::get('/Mi-Progreso', [MiProgresoController::class, 'vermiprogreso']);
Route::get('/Mi-Progreso-Calendario', [MiProgresoController::class, 'vercalendario']);

Route::get('/Perfil', [HomeusuarioController::class, 'verperfil']);

Route::fallback(function (){
    return view('errors/ind404');
});