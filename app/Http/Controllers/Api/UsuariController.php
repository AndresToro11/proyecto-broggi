<?php

namespace App\Http\Controllers\Api;

use App\Models\Usuari;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\DefaultResource;

class UsuariController extends Controller
{
    public function index()
    {
        $usuaris = Usuari::all();
        return DefaultResource::collection($usuaris);
    }

    public function login(Request $request)
    {
        $codi = $request->input('codi');
        $contrassenya = $request->input('contrassenya');

        $user = Usuari::where('codi', $codi)->first();

        if ($user != null && Hash::check($contrassenya, $user->contrassenya)) {
            Auth::login($user);
            //$response = redirect('/home');
        } else {
            //$request->session()->flash('error', 'Usuario o contraseña incorrecta');
            //$response = redirect('/login')->withInput();
        }
        //return $response;
    }

    public function store(Request $request)
    {
        $user = new Usuari();

        $user->codi = $request->input('id');
        $user->contrassenya = $request->input('contrassenya');
        $user->nom = $request->input('nom');
        $user->cognoms = $request->input('cognoms');
        $user->perfil = $request->input('perfil');

        $user->save();
    }

    public function logout()
    {
        Auth::logout();
    }

    public function update(Request $request, Usuari $user)
    {
        $user->codi = $request->input('id');
        $user->contrassenya = $request->input('contrassenya');
        $user->nom = $request->input('nom');
        $user->cognoms = $request->input('cognoms');

        $user->save();
    }

    public function destroy(Usuari $usuari)
    {
        $usuari->actiu = false;
        $usuari->save();
    }
}
