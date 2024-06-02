<?php

use Illuminate\Support\Facades\Route;


Route::view('/','inicio')->name('inicio');
Route::view('programas','programas')->name('programas');
Route::view('talleres','talleres')->name('talleres');
Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');