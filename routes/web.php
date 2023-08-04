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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\recetas_controlador; 
Route::get('/', [recetas_controlador::class, 'inicio']);
Route::get('/verRecetas', [recetas_controlador::class, 'verRecetas']);
Route::get('/altaRecetas', [recetas_controlador::class, 'altaRecetas']);
Route::get('/modRecetas', [recetas_controlador::class, 'modRecetas']);

use App\Http\Controllers\recursos_controlador;
Route::resource('/recursos', recursos_controlador::class);


