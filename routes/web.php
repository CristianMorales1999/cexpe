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