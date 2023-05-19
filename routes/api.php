<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\SumaRestaController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/mostrar-persona1', [PersonaController::class, 'mostrarPersona']);
Route::post('/guardar-persona', [PersonaController::class, 'guardarPersona']);
Route::post('/guardar-personas', [PersonaController::class, 'guardarPersonas']);
Route::post('/SumaDivicion', [SumaRestaController::class, 'SumaDivicion']);

//vista de alumnos
Route::get('/mostrar-alumnos', [AlumnoController::class, 'mostrarAlumnos']);
