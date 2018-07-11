<?php

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
Route::get('/actores','ActorContoller@listar');

Route::get('/resultado/{numero}', 'NumberController@numero');

Route::get('/miPrimerRuta', function(){
  echo ('Cree mi primer ruta en Laravel');
});

Route::get('/', function () {
    return view('welcome');
});
