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



Route::get('/nombre',function(){
    $nombre = config('app.name');
    return $nombre;
});

Route::get('/tiempo',function(){
    $zona = config('app.timezone');
    return $zona;

});

Route::get('/runtime',function(){
  config(['app.timezone' => 'America/Bogota']);
  $tiempo = config('app.timezone');
  return $tiempo;
});

Route::get('/admin',function(){
    return "Hola desde Admin";
  });

Route::get('test',function(){

    return view('test');

});

Route::get('prueba','App\Http\Controllers\prueba@dirigir');

Route::get('casa',function(){
    return "Hola desde Casa";
});

Route::get('user/{name}/{age}','App\Http\Controllers\TestController@index');

Route::resource('task','App\Http\Controllers\TaskController');

Route::get('demo',function(){

    return view('demo');
});

Route::get('jaja','App\Http\Controllers\jaja@hacer');

Route::get('users/{user}','App\Http\Controllers\UserController@show');
