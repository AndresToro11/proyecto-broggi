<?php

namespace App\Http\Controllers;

use Utilitat;
use App\Models\Perfil;
use App\Models\Usuari;
use Illuminate\Http\Request;
use App\Http\Resources\Admin\RolesResource;
use App\Http\Resources\Admin\UsuariosResource;

class AdminController extends Controller
{

    public function usuarios()
    {
        $result = Usuari::with('perfil')
                        ->select(['codi', 'nom', 'cognoms', 'perfils_id', 'mail'])
                        ->orderBy('perfils_id')
                        ->get();

        return UsuariosResource::collection($result);               
    }

    public function operadores()
    {
        $result = Usuari::with('perfil')
                        ->select(['codi', 'nom', 'cognoms', 'perfils_id', 'mail'])
                        ->where('perfils_id', 1)
                        ->get();

        return RolesResource::collection($result);               
    }

    public function supervisores()
    {
        $result = Usuari::with('perfil')
                        ->select(['codi', 'nom', 'cognoms', 'perfils_id', 'mail'])
                        ->where('perfils_id', 2)
                        ->get();

        return RolesResource::collection($result);               
    }

    public function roles()
    {
        $result = Perfil::select('*')
                        ->where('id','!=', 3)
                        ->get();

        return UsuariosResource::collection($result);               
    }

    public function insertUsuario(Request $request)
    {
        $usuario = new Usuari();

        $usuario->nom = $request->nombre;
        $usuario->cognoms = $request->apellidos;
        $usuario->contrassenya = $request->contrasena;
        $usuario->codi = $request->nick;
        $usuario->mail = $request->mail;
        $usuario->perfils_id = $request->rol;
        $usuario->activo = 1;

        try{
            $cicle->save(); 
            $response = (new CicleResource($cicle))
                         ->response()
                         ->setStatusCode(201);
         }
         catch(QueryException $e){
             $mensaje = Utilitat::errorMessage($e);
             $response = \response()
                         ->json(['error' => $mensaje], 400);
         }
         return $response;
    }

    public function update(Request $request, Usuari $usuari)
    {
        //
    }

    public function destroy(Usuari $usuari)
    {
        //
    }
}
