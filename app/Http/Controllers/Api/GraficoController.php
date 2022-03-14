<?php

namespace App\Http\Controllers\Api;

use App\Models\Expedient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Grafico\ProvinciasResource;
use App\Http\Resources\Grafico\MunicipiosResource;

class GraficoController extends Controller
{
    function provincias(){
        $provincias = Expedient::with('cartas_trucades.provincia')
                                ->get();

        return ProvinciasResource::collection($provincias);
    }

    function municipios(){
        $provincias = Expedient::with('cartas_trucades.municipi')
                                ->get();

        return MunicipiosResource::collection($provincias);
    }
}
