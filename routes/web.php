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

Route::get('/estilo','App\Http\Controllers\EstiloController@index')->name('estilos.index');

Route::get('/estilo/{id_estilo}/show','App\Http\Controllers\EstiloController@show')->name('estilos.show');

Route::get('/mota','App\Http\Controllers\MotaController@index')->name('motas.index');

Route::get('/mota/{id}/show','App\Http\Controllers\MotaController@show')->name('motas.show');

Route::get('/publicidade','App\Http\Controllers\PublicidadeController@index')->name('publicidades.index');

Route::get('/publicidade/{id}/show','App\Http\Controllers\PublicidadeController@show')->name('publicidades.show');

Route::get('/marca','App\Http\Controllers\MarcaController@index')->name('marcas.index');

Route::get('/marca/{id}/show','App\Http\Controllers\MarcaController@show')->name('marcas.show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
