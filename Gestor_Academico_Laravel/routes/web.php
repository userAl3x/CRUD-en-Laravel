<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;      //Importacion de controlador de estudiantes
use App\Http\Controllers\ProfesorController;        //Importacion de controlador de profesores


// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

Route::resource('estudiantes', EstudianteController::class);
Route::resource('profesores', ProfesorController::class);

