<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipus_incident;
use App\Http\Controllers\Controller;
use App\Http\Resources\TiposIncidenteResource;

class TiposIncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tIncidente = Tipus_incident::all();
        return TiposIncidenteResource::collection($tIncidente);
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
     * @param  \App\Models\Tipus_incident  $tipus_incident
     * @return \Illuminate\Http\Response
     */
    public function show(Tipus_incident $tipus_incident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipus_incident  $tipus_incident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipus_incident $tipus_incident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipus_incident  $tipus_incident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipus_incident $tipus_incident)
    {
        //
    }
}
