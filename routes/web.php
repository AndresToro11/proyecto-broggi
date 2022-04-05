<?php

use Illuminate\Support\Facades\Auth;
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

//------------------------------ Login -----------------------------

/*Route::get('/login', function () {
    return view('login');
});*/

Route::get('/login', [UsuariController::class, 'showLogin'])->name('login');
Route::post('/login', [UsuariController::class, 'login'] );
Route::get('/logout', [UsuariController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        $user = Auth::user();

        return view('home', compact('user'));
    });


    Route::get('/llamada', function () {
        return view('llamada');
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

//----------------------------- Perfil -----------------------------

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/admin/nuevoUsuario', function () {
    return view('administracion.nuevoUsuario');
});

Route::get('/admin/editarUsuario', function () {
    return view('administracion.editarUsuario');
});
