<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Dades_personals;
use App\Http\Controllers\Controller;
use App\Http\Resources\DatosPersonalesResource;

class DatosPersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosPersonales = Dades_personals::all();
        return DatosPersonalesResource::collection($datosPersonales);
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
     * @param  \App\Models\Dades_personals  $dades_personals
     * @return \Illuminate\Http\Response
     */
    public function show(Dades_personals $dades_personals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dades_personals  $dades_personals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dades_personals $dades_personals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dades_personals  $dades_personals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dades_personals $dades_personals)
    {
        //
    }
}
