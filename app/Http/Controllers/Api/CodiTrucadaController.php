<?php

namespace App\Http\Controllers;

use App\Models\codi_trucada;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storecodi_trucadaRequest;
use App\Http\Requests\Updatecodi_trucadaRequest;

class CodiTrucadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storecodi_trucadaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecodi_trucadaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\codi_trucada  $codi_trucada
     * @return \Illuminate\Http\Response
     */
    public function show(codi_trucada $codi_trucada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\codi_trucada  $codi_trucada
     * @return \Illuminate\Http\Response
     */
    public function edit(codi_trucada $codi_trucada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecodi_trucadaRequest  $request
     * @param  \App\Models\codi_trucada  $codi_trucada
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecodi_trucadaRequest $request, codi_trucada $codi_trucada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\codi_trucada  $codi_trucada
     * @return \Illuminate\Http\Response
     */
    public function destroy(codi_trucada $codi_trucada)
    {
        //
    }
}
