<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carta_trucada;
use App\Http\Controllers\Controller;
use App\Http\Resources\CartaTrucadaResource;

class CartaLlamadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carta = Carta_trucada::with('incident', 'tipus_localitzacio', 'usuari', 'provincia',
                                    'municipi', 'dades_personals', 'agencia')
                                ->get();

        return new CartaTrucadaResource($carta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carta_trucada  $carta_trucada
     * @return \Illuminate\Http\Response
     */
    public function show(Carta_trucada $carta_trucada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carta_trucada  $carta_trucada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carta_trucada $carta_trucada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carta_trucada  $carta_trucada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carta_trucada $carta_trucada)
    {
        //
    }
}
