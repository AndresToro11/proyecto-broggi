<?php

namespace App\Http\Resources\Grafico;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuariosIncidentesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'nombre' => $this->incident->descripcio,
            'numero' => $this->numero
        ];
    }
}
