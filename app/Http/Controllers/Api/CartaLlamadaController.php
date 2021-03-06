<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use Illuminate\Http\Request;
use App\Models\Carta_trucada;
use App\Http\Controllers\Controller;
use App\Http\Resources\DefaultResource;
use Illuminate\Database\QueryException;

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
        return DefaultResource::collection($cartaLlamada);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carta_trucada = new Carta_trucada();

        $carta_trucada->data_hora = $request->data_hora;
        $carta_trucada->adreca_trucada = $request->adreca_trucada;
        $carta_trucada->dades_personals_id = $request->dades_personals_id;
        $carta_trucada->descripcio_localitzacio = $request->descripcio_localitzacio;
        $carta_trucada->detall_localitzacio = $request->detall_localitzacio;
        $carta_trucada->expedients_id = $request->expedients_id;
        $carta_trucada->fora_catalunya = $request->fora_catalunya;
        $carta_trucada->incidents_id = $request->incidents_id;
        $carta_trucada->municipis_id = $request->municipis_id;
        $carta_trucada->municipis_id_trucada = $request->municipis_id_trucada;
        $carta_trucada->nota_comuna = $request->nota_comuna;
        $carta_trucada->origen_trucada = $request->origen_trucada;
        $carta_trucada->procedencia_trucada = $request->procedencia_trucada;
        $carta_trucada->provincies_id = $request->provincies_id;
        $carta_trucada->telefon = $request->telefon;
        $carta_trucada->temps_trucada = $request->temps_trucada;
        $carta_trucada->tipus_localitzacions_id = $request->tipus_localitzacions_id;
        $carta_trucada->usuaris_id = $request->usuaris_id;
        try {
            $carta_trucada->save();
            $response = response()->json(['message'=> 'OK ALL'],201);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()
                        ->json(['error'=>$mensaje],400);
        }

    return $response;
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
