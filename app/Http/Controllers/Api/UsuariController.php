<?php

namespace App\Http\Controllers\Api;

use App\Models\Usuari;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariController extends Controller


{

    public function showLogin()
    {
        //  $user = new Usuari();

        //  $user->codi = 'Andrés';
        //  $user->mail = 'atoro2021@cepnet.net';
        //  $user->nom = 'Andrés';
        //  $user->cognoms = 'Toro';
        //  $user->contrassenya = \bcrypt('9876');
        //  $user->activo = true;
        //  $user->perfils_id = 1;

        //  $user->save();

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $mail = $request->input('mail');
        $contrassenya = $request->input('contrassenya');

        $user = Usuari::where('mail', $mail)->first();

        // if ($user != null && Hash::check($contrassenya, $user->contrassenya)) {
            if ($user != null && $contrassenya === $user->contrassenya) {
            Auth::login($user);
            $response = redirect('/home');
        }
        else{
            $request->session()->flash('error', 'Usuario o contraseña incorrecta');
            $response = redirect('/login')->withInput();
        }
        return $response;
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
        return redirect('/login');
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
