<?php

namespace App\Http\Resources\Grafico;

use Illuminate\Http\Resources\Json\JsonResource;

class MunicipiosResource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'nombre' => $this->municipi->nom,
            'numero' => $this->numero
        ];
    }
}
