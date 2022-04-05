<?php

use App\Models\Municipi;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComarcaController;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\Api\UsuariController;
use App\Http\Controllers\Api\GraficoController;
use App\Http\Controllers\Api\ExpedientController;

use App\Http\Controllers\Api\MunicipioController;
use App\Http\Controllers\TiposIncidenteController;
use App\Http\Controllers\TiposLocalizacionController;
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

//-------------------------- Carta de llamada -------------------------------------

Route::apiResource('municipio', MunicipioController::class);
Route::apiResource('provincia', ProvinciaController::class);
Route::apiResource('comarca', ComarcaController::class);
Route::apiResource('incidente', IncidenteController::class);
Route::apiResource('tiposIncidente', TiposIncidenteController::class);
Route::apiResource('tiposLocalitzacion', TiposLocalizacionController::class);
Route::apiResource('datosPersonales', DatosPersonalesController::class);

//-------------------------------- Expedientes ------------------------------------

Route::apiResource('expedientes', ExpedientController::class);

//----------------------------------- Grafico ---------------------------------------

Route::get('grafico/provincias', [GraficoController::class, 'provincias']);
Route::get('grafico/municipios', [GraficoController::class, 'municipios']);
Route::get('grafico/usuarios', [GraficoController::class, 'usuarios']);
Route::get('grafico/usuarios-incidentes', [GraficoController::class, 'usuariosIncidentes']);
Route::get('grafico/usuarios/{usuario}', [GraficoController::class, 'showUsuario']);

//------------------------------------ Admin --------------------------------------

Route::get('admin/usuarios', [AdminController::class, 'usuarios']);
Route::get('admin/operadores', [AdminController::class, 'operadores']);
Route::get('admin/supervisores', [AdminController::class, 'supervisores']);
Route::get('admin/roles', [AdminController::class, 'roles']);
Route::post('admin/insertUsuario', [AdminController::class, 'insertUsuario']);
Route::get('admin/inactivos', [AdminController::class, 'inactivos']);

//-------------------------------------- Perfil -------------------------------------

Route::put('admin/updateUsuario/{usuario}', [AdminController::class, 'updateUsuario']);
Route::put('admin/deleteUsuario/{usuario}', [AdminController::class, 'deleteUsuario']);
Route::put('admin/activarUsuario/{usuario}', [AdminController::class, 'activarUsuario']);

//---------------------------------------- Mapa ---------------------------------------

Route::get('mapa/agencias', [MapaController::class, 'selectAgencias']);

//--------------------------------------------  ---------------------------------------
