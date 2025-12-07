<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserControllerApi;     //importamos el controlador de user para sanctum
use App\Http\Middleware\IsAdmin;                    //importamos el middleware de isAdmin     
use App\Http\Controllers\ProfesorController;        //importamos el controlador de profesor
use App\Http\Controllers\EstudianteController;      //importamos el controlador de estudiante
use App\Http\Controllers\AuthController;            //importamos el controlador de auth para sanctum

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*ruta para los estudiantes y profesores con el middleware de isAdmin
Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::apiResource('estudiantes', EstudianteController::class);
    Route::apiResource('profesores', ProfesorController::class);
});
*/

// Rutas protegidas con auth:sanctum + IsAdmin
Route::middleware(['auth:sanctum', IsAdmin::class])->group(function () {
    Route::apiResource('estudiantes', EstudianteController::class);
    Route::apiResource('profesores', ProfesorController::class);
});


//Rutas login y register
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Ruta para obtener información del usuario autenticado
Route::middleware(['auth:sanctum', IsAdmin::class])->get('/me', [UserControllerApi::class, 'me']);
