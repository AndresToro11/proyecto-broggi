<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use App\Clases\Utilitat;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Resources\Admin\DefaultResource;

class MapaController extends Controller
{
    public function selectAgencias(){
        $result = Agencia::with('municipi')
                            ->select('*')
                            ->get();

        return DefaultResource::collection($result);
    }
}
