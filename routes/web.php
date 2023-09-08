<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetasController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeusuarioController; 

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

Route::get('/Register', [RegisterController::class, 'verregister']);

Route::get('/HomeUsuario', [HomeusuarioController::class, 'verhomeusuario']);

Route::get('/Recetas', [RecetasController::class, 'verrecetas']);