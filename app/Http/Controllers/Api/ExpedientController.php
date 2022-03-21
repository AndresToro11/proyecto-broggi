<?php

namespace App\Http\Controllers\Api;

use App\Models\Expedient;
use Illuminate\Http\Request;
use App\Models\Carta_trucada;
use App\Http\Controllers\Controller;
use App\Http\Resources\ExpedientResource;

class ExpedientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedientes = Expedient::with('estat_expedient', 'cartas_trucades', 'cartas_trucades.usuari',
                                'cartas_trucades.provincia', 'cartas_trucades.municipi', 'cartas_trucades.incident')
                                ->get();

        return new ExpedientResource($expedientes);
    }
}
