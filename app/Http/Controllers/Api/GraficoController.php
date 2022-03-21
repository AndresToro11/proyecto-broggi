<?php

namespace App\Http\Controllers\Api;

use App\Models\Usuari;
use App\Models\Expedient;
use Illuminate\Http\Request;
use App\Models\Carta_trucada;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\Grafico\UsuarioResource;
use App\Http\Resources\Grafico\UsuariosResource;
use App\Http\Resources\Grafico\MunicipiosResource;
use App\Http\Resources\Grafico\ProvinciasResource;
use App\Http\Resources\Grafico\UsuariosIncidentesResource;

class GraficoController extends Controller
{
    function provincias(){
        $provincias = Carta_trucada::with('provincia')
                                    ->select(['provincies_id', DB::raw('count(distinct expedients_id) as numero')])
                                    ->groupBy('provincies_id')
                                    ->get();

        return ProvinciasResource::collection($provincias);
    }

    function municipios(){
        $municipios = Carta_trucada::with('municipi')
                                    ->select(['municipis_id', DB::raw('count(distinct expedients_id) as numero')])
                                    ->groupBy('municipis_id')
                                    ->get();

        return MunicipiosResource::collection($municipios);
    }
    function usuarios(){
        $result = Usuari::select(['id', 'codi'])
                        ->get();

        return UsuariosResource::collection($result);
    }

    function usuariosIncidentes(){
        $result = Carta_trucada::with('incident')
                                ->select('incidents_id', DB::raw('count(incidents_id) as numero'))
                                ->groupBy('incidents_id')
                                ->get();
        return UsuariosIncidentesResource::collection($result);
    }

    function showUsuario($user){
        $result = Carta_trucada::with('usuari', 'incident')
                        ->select(['cartes_trucades.usuaris_id', 'cartes_trucades.incidents_id', DB::raw('count(cartes_trucades.incidents_id) as numero')])
                        ->where('usuaris_id', $user)
                        ->groupBy('cartes_trucades.incidents_id', 'cartes_trucades.usuaris_id')
                        ->get();

        return UsuarioResource::collection($result);
    }
}
