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
