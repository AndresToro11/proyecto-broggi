<?php

use App\Http\Controllers\Api\CartaLlamadaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ComarcaController;
use App\Http\Controllers\Api\IncidenteController;
use App\Http\Controllers\Api\ProvinciaController;
use App\Http\Controllers\Api\UsuariController;
use App\Http\Controllers\Api\ExpedientController;
use App\Http\Controllers\Api\MunicipioController;
use App\Http\Controllers\Api\TiposIncidenteController;

use App\Http\Controllers\Api\TiposLocalizacionController;
use App\Http\Controllers\Api\DatosPersonalesController;


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

Route::apiResource('municipio', MunicipioController::class);
Route::apiResource('provincia', ProvinciaController::class);
Route::apiResource('comarca', ComarcaController::class);
Route::apiResource('incidente', IncidenteController::class);
Route::apiResource('tiposIncidente', TiposIncidenteController::class);
Route::apiResource('tiposLocalitzacion', TiposLocalizacionController::class);
Route::apiResource('datosPersonales', DatosPersonalesController::class);
Route::apiResource('llamadas', CartaLlamadaController::class);
Route::apiResource('expediente', ExpedientController::class); //->only(['index', 'provincias']);
// Route::get('llamadas/cartaLlamadaId', [CartaLlamadaController::class, 'cartaLlamadaId']);
