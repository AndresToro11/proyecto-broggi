<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuariController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//------------------------------ User -----------------------------

Route::resource('user', UsuariController::class);

//-------------------------- Paginas logeadas ---------------------

Route::middleware(['auth'])->group(function () {
});

//------------------------------Llamada-------------------------------------

Route::get('/llamada', function () {
    return view('llamada');
});
