<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use App\Models\Expedient;
use Illuminate\Http\Request;
use App\Models\Carta_trucada;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
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

    public function provincias(){
        $expedientes = Expedient::with('estat_expedient', 'cartas_trucades', 'cartas_trucades.usuari',
        'cartas_trucades.provincia', 'cartas_trucades.municipi')
        ->get();

        return new ExpedientResource($expedientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expediente = new Expedient();

        $expediente->codi_trucada = $request->codi_trucada;
        try {
            $expediente->save();
            $response = response()->json(['message' => 'OK ALL'], 201);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()
                ->json(['error' => $mensaje], 400);
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expedient  $expedient
     * @return \Illuminate\Http\Response
     */
    public function show(Expedient $expedient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expedient  $expedient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expedient $expedient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expedient  $expedient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expedient $expedient)
    {
        //
    }
}
