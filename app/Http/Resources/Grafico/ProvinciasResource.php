<?php

namespace App\Http\Resources\Grafico;

use Illuminate\Http\Resources\Json\JsonResource;

class ProvinciasResource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'nombre' => $this->provincia->nom,
            'numero' => $this->numero
        ];
    }
}
