<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RespuestasController;
use App\Http\Controllers\Api\TiposUsuarioController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::get('/prueba', function () {
    $respuesta = array();
    $respuesta["nombre"] = "Emiliano";
    $respuesta["apellidos"] = "Lopez";
    return $respuesta;
});

Route::post('/respuestas',' Api/RespuestasController@store') -> name('api.respuestas')
*/
Route::post('/respuestas',[RespuestasController::class,'store'])-> name('api.respuestas.store');
Route::get('/tiposusuario', [TiposUsuarioController::class, 'index'])->name('api.tiposusuario.index');
