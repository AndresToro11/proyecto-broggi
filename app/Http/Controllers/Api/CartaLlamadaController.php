<?php

namespace App\Http\Controllers\Api;

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
        $cartaLlamada = Carta_trucada::all();
        return CartaTrucadaResource::collection($cartaLlamada);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Carta_trucada $cartaLlamada)
    {
        $carta_trucada = new Carta_trucada();
        $carta_trucada = $cartaLlamada;
        $carta_trucada->save();
        return redirect()->action([CartaLlamadaController::class, 'home']);
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
