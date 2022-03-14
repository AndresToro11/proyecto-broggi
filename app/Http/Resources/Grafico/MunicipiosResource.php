<?php

namespace App\Http\Resources\Grafico;

use Illuminate\Http\Resources\Json\JsonResource;

class MunicipiosResource extends JsonResource
{
    public function toArray($request)
    {
        return  [
            $this->cartas_trucades[0]->municipi->nom
        ];
    }
}
