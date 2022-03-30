<?php

namespace App\Http\Controllers;

use App\Clases\Utilitat;
use App\Models\Perfil;
use App\Models\Usuari;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Resources\Admin\RolesResource;
use App\Http\Resources\Admin\UsuariosResource;

class AdminController extends Controller
{

    public function usuarios()
    {
        $result = Usuari::with('perfil')
                        ->select(['id','codi', 'nom', 'cognoms', 'perfils_id', 'mail'])
                        ->where('activo', 1)
                        ->orderBy('perfils_id')
                        ->get();

        return RolesResource::collection($result);
    }

    public function operadores()
    {
        $result = Usuari::with('perfil')
                        ->select(['id', 'codi', 'nom', 'cognoms', 'perfils_id', 'mail'])
                        ->where('activo', 1)
                        ->where('perfils_id', 1)
                        ->get();

        return RolesResource::collection($result);
    }

    public function supervisores()
    {
        $result = Usuari::with('perfil')
                        ->select(['id', 'codi', 'nom', 'cognoms', 'perfils_id', 'mail'])
                        ->where('activo', 1)
                        ->where('perfils_id', 2)
                        ->get();

        return RolesResource::collection($result);
    }

    public function inactivos()
    {
        $result = Usuari::with('perfil')
                        ->select(['id', 'codi', 'nom', 'cognoms', 'perfils_id', 'mail'])
                        ->where('activo', 0)
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
            $usuario->save();
            $response = response()->json(['message' => 'Tot correcte'], 201);
         }
         catch(QueryException $e){
             $mensaje = Utilitat::errorMessage($e);
             $response = \response()
                         ->json(['error' => $mensaje], 400);
         }
         return $response;
    }

    public function updateUsuario(Request $request, Usuari $usuario){

        if($request->accion == 'datos'){
            try{
                Usuari::where('id', $usuario->id)
                    ->update(['nom' => $request->nombre,
                            'cognoms' => $request->apellidos,
                            'mail' => $request->mail,
                            'perfils_id' => $request->rol
                            ]);

                $response = response()->json(['Mensaje' => 'Todo correcto y yo que me alegro'], 201);
            }
            catch(QueryException $e){
                $mensaje = Utilitat::errorMessage($e);
                $response = \response()
                            ->json(['error' => $mensaje], 400);
            }
        }

        elseif($request->accion == 'contrasena'){
            try{
                Usuari::where('id', $usuario->id)
                    ->update(['contrassenya' => $request->contrasena]);

                $response = response()->json(['Mensaje' => 'Todo correcto y yo que me alegro'], 201);
            }
            catch(QueryException $e){
                $mensaje = Utilitat::errorMessage($e);
                $response = \response()
                            ->json(['error' => $mensaje], 400);
            }
        }

         return $response;
    }

    public function activarUsuario(Usuari $usuario){
        try{
            Usuari::where('id', $usuario->id)
                ->update(['activo' => 1]);

            $response = response()->json(['Mensaje' => 'Usuario activado'], 201);
        }
        catch(QueryException $e){
            $mensaje = Utilitat::errorMessage($e);
            $response = \response()
                        ->json(['error' => $mensaje], 400);
        }
        return $response;
    }

    public function deleteUsuario(Usuari $usuario){
        try{
            Usuari::where('id', $usuario->id)
                ->update(['activo' => 0]);

            $response = response()->json(['Mensaje' => 'Usuario desactivado'], 201);
        }
        catch(QueryException $e){
            $mensaje = Utilitat::errorMessage($e);
            $response = \response()
                        ->json(['error' => $mensaje], 400);
        }
        return $response;
    }
}
