<?php

namespace App\Http\Controllers\Api;

use App\Models\Expedient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GraficoResource;

class GraficoController extends Controller
{
    function provincias(){
        $provincias = Expedient::with('cartas_trucades.provincia')
                                ->get();
                                
        return GraficoResource::collection($provincias);
    }
}
