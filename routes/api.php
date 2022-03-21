<?php

use App\Http\Controllers\Api\MunicipioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UsuariController;
<<<<<<< HEAD
use App\Models\Municipi;
=======
use App\Http\Controllers\Api\GraficoController;
use App\Http\Controllers\Api\ExpedientController;
>>>>>>> Andres

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

Route::apiResource('user', UsuariController::class);

<<<<<<< HEAD
Route::apiResource('municipio', MunicipioController::class);
Route::apiResource('expediente', ExpedientController::class);//->only(['index', 'provincias']);
Route::get('expediente/provincias', [ExpedientController::class, 'provincias']);
=======
Route::apiResource('expedientes', ExpedientController::class);

//-------------------------------- Grafico -----------------------------------

Route::get('grafico/provincias', [GraficoController::class, 'provincias']);
Route::get('grafico/municipios', [GraficoController::class, 'municipios']);
Route::get('grafico/usuarios', [GraficoController::class, 'usuarios']);
Route::get('grafico/usuarios-incidentes', [GraficoController::class, 'usuariosIncidentes']);
Route::get('grafico/usuarios/{usuario}', [GraficoController::class, 'showUsuario']);

//----------------------------------------------------------------------------
>>>>>>> Andres
