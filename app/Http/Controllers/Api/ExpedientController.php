<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use App\Models\Expedient;
use Illuminate\Http\Request;
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
                                ->orderBy('estats_expedients_id', 'asc')
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
        $expediente->data_creacio = $request->data_creacio;
        $expediente->data_ultima_modificacio = $request->data_ultima_modificacio;
        $expediente->estats_expedients_id = $request->estats_expedients_id;
        try {
            $expediente->save();
            $response = (new ExpedientResource($expediente))
                        ->response()
                        ->setStatusCode(201);
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
