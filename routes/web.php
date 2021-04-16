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
    return view('index');
});

Route::get('/estilo','App\Http\Controllers\EstiloController@index')->name('estilos.index');

Route::get('/estilo/{id_estilo}/show','App\Http\Controllers\EstiloController@show')->name('estilos.show');

Route::get('/estilo/create','App\Http\Controllers\EstiloController@create')->name('estilos.create')->middleware('auth');

Route::post('/estilo','App\Http\Controllers\EstiloController@store')->name('estilos.store')->middleware('auth');

Route::get('/estilo/{id_estilo}/edit','App\Http\Controllers\EstiloController@edit')->name('estilos.edit')->middleware('auth');

Route::patch('/estilo/{id_estilo}/','App\Http\Controllers\EstiloController@update')->name('estilos.update')->middleware('auth');

Route::get('/estilo/{id_estilo}/delete','App\Http\Controllers\EstiloController@delete')->name('estilos.delete')->middleware('auth');

Route::delete('/estilo/{id_estilo}','App\Http\Controllers\EstiloController@destroy') ->name('estilos.destroy')->middleware('auth'); 





Route::get('/mota','App\Http\Controllers\MotaController@index')->name('motas.index');

Route::get('/mota/{id}/show','App\Http\Controllers\MotaController@show')->name('motas.show');

Route::get('/mota/create','App\Http\Controllers\MotaController@create')->name('motas.create')->middleware('auth');

Route::post('/mota','App\Http\Controllers\MotaController@store')->name('motas.store')->middleware('auth');

Route::get('/mota/{id_mota}/edit','App\Http\Controllers\MotaController@edit')->name('motas.edit')->middleware('auth');

Route::patch('/mota/{id_mota}/update','App\Http\Controllers\MotaController@update')->name('motas.update')->middleware('auth');

Route::get('/mota/{id_mota}/delete','App\Http\Controllers\MotaController@delete')->name('motas.delete')->middleware('auth');

Route::delete('/mota','App\Http\Controllers\MotaController@destroy')->name('motas.destroy')->middleware('auth');








Route::get('/publicidade','App\Http\Controllers\PublicidadeController@index')->name('publicidades.index');

Route::get('/publicidade/{id}/show','App\Http\Controllers\PublicidadeController@show')->name('publicidades.show');

Route::get('/publicidade/create','App\Http\Controllers\PublicidadeController@create')->name('publicidades.create')->middleware('auth');

Route::post('/publicidade','App\Http\Controllers\PublicidadeController@store')->name('publicidades.store')->middleware('auth');

Route::get('/publicidade/{id_publicidade}/edit','App\Http\Controllers\PublicidadeController@edit')->name('publicidades.edit')->middleware('auth');

Route::patch('/publicidade/{id_publicidade}/update','App\Http\Controllers\PublicidadeController@update')->name('publicidades.update')->middleware('auth');

Route::get('/publicidade/{id_publicidade}/delete','App\Http\Controllers\PublicidadeController@delete')->name('publicidades.delete')->middleware('auth');

Route::delete('/publicidade','App\Http\Controllers\PublicidadeController@destroy')->name('publicidades.destroy')->middleware('auth');







Route::get('/marca','App\Http\Controllers\MarcaController@index')->name('marcas.index');

Route::get('/marca/{id}/show','App\Http\Controllers\MarcaController@show')->name('marcas.show');

Route::get('/marca/create','App\Http\Controllers\MarcaController@create')->name('marcas.create')->middleware('auth');

Route::post('/marca','App\Http\Controllers\MarcaController@store')->name('marcas.store')->middleware('auth');

Route::get('/marca/{id_marca}/edit','App\Http\Controllers\MarcaController@edit')->name('marcas.edit')->middleware('auth');

Route::patch('/marca/{id_marca}/','App\Http\Controllers\MarcaController@update')->name('marcas.update')->middleware('auth');

Route::get('/marca/{id_marca}/delete','App\Http\Controllers\MarcaController@delete')->name('marcas.delete')->middleware('auth');

Route::delete('/marca/{id_marca}','App\Http\Controllers\MarcaController@destroy') ->name('marcas.destroy')->middleware('auth');  


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
