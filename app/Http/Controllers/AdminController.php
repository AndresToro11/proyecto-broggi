<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;
use App\Http\Resources\Admin\UsuariosResource;
use App\Http\Resources\Admin\RolesResource;

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

    public function store(Request $request)
    {
        //
    }

    public function show(Usuari $usuari)
    {
        //
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
