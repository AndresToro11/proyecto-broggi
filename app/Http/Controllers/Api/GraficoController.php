<?php

namespace App\Http\Controllers\Api;

use App\Models\Usuari;
use App\Models\Expedient;
use Illuminate\Http\Request;
use App\Models\Carta_trucada;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\Grafico\UsuariosResource;
use App\Http\Resources\Grafico\MunicipiosResource;
use App\Http\Resources\Grafico\ProvinciasResource;

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

    function usuarios($user = 1){
        if(!$user){
            $result = Usuari::with('cartes_trucades', 'cartes_trucades.incident')
                            ->get();
        }
        else{
            $result = Carta_trucada::with('usuari', 'incident')
                            ->select(['cartes_trucades.usuaris_id', 'cartes_trucades.incidents_id', DB::raw('count(cartes_trucades.incidents_id) as numero')])
                            ->where('usuaris_id', $user)
                            ->groupBy('cartes_trucades.incidents_id', 'cartes_trucades.usuaris_id')
                            ->get();
        }

        return UsuariosResource::collection($result);
    }
}
