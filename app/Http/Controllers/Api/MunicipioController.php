<?php

namespace App\Http\Controllers\Api;

use App\Models\Municipi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\MunicipioResource;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipio = Municipi::all();
        return DefaultResource::collection($municipio);
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
     * @param  \App\Models\Municipi  $municipi
     * @return \Illuminate\Http\Response
     */
    public function show(Municipi $municipi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipi  $municipi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipi $municipi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipi  $municipi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipi $municipi)
    {
        //
    }
}
