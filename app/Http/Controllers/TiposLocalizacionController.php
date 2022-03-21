<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipus_localitzacio;
use App\Http\Controllers\Controller;
use App\Http\Resources\TiposLocalitzacionResource;

class TiposLocalizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposLocalitzacion = Tipus_localitzacio::all();
        return TiposLocalitzacionResource::collection($tiposLocalitzacion);
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
     * @param  \App\Models\Tipus_localitzacio  $tipus_localitzacio
     * @return \Illuminate\Http\Response
     */
    public function show(Tipus_localitzacio $tipus_localitzacio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipus_localitzacio  $tipus_localitzacio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipus_localitzacio $tipus_localitzacio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipus_localitzacio  $tipus_localitzacio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipus_localitzacio $tipus_localitzacio)
    {
        //
    }
}
