<?php

use Illuminate\Support\Facades\Route;

Route::view('/','inicio')->name('inicio');
Route::get('programas','App\Http\Controllers\ProgramasController@index')->name('programas');
Route::view('talleres','talleres')->name('talleres');
Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');

//Generamos las 7 rutas de los métodos del controlador
//Si quereremos verificar la creación de estas rutas hacemos uso del siguiente comando en la terminal:
    //php artisan route:list
Route::resource('programas','App\Http\Controllers\ProgramasController');

//Adicional a esto hay otras dos maneras de crear rutas para los metodos del Controlador:
    //1. Si queremos crear las rutas para solo algunos metodos del controlador usamos el siguiente comando:
    //Route::resource('programas','App\Http\Controllers\ProgramasController')->only('index','show');

    //2. Si queremos crear las rutas de todos los metodos del controlador a excepcion de algunos en especifico usamos el siguiente comando:
    //Route::resource('programas','App\Http\Controllers\ProgramasController')->except('index','show');