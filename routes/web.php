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

//------------------------------ Home -----------------------------

Route::get('/home', function () {
    return view('home');
});

//------------------------------ Llamada -----------------------------

Route::get('/llamada', function () {
    return view('llamada');
});

//------------------------------ Operadores -----------------------------

Route::get('/operadores', function () {
    return view('operadores');
});

//-------------------------------- Video ---------------------------

Route::get('/video', function () {
    return view('video');
});


//---------------------------- Expedientes -------------------------

Route::get('/expedientes', function () {
    return view('expedientes');
});

//-------------------------- Paginas logeadas ---------------------

Route::middleware(['auth'])->group(function () {
});

//----------------------------- Grafico -----------------------------

Route::get('/grafico', function () {
    return view('grafico');
});
