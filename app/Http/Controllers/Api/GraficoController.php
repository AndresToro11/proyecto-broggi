<?php

namespace App\Http\Controllers\Api;

use App\Models\Expedient;
use Illuminate\Http\Request;
use App\Models\Carta_trucada;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
}
