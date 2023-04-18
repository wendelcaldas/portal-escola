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

Route::get('/inicio', 'InicioController@Inicio')->name('inicio');

Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/matricula', 'MatriculaController@inicio')->name('matricula');
Route::post('/matricula', 'MatriculaController@inicio')->name('matricula');
