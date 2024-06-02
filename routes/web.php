<?php

use Illuminate\Support\Facades\Route;


$programas=[
    ['nombre'=>'Danza'],
    ['nombre'=>'Baile'],
    ['nombre'=>'Oratoria'],
    ['nombre'=>'Liderazgo']
];

Route::view('/','inicio')->name('inicio');
Route::view('programas','programas',compact('programas'))->name('programas');
Route::view('talleres','talleres')->name('talleres');
Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');