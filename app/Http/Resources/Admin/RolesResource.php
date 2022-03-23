<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class RolesResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'codi' => $this->codi,
            'nombre' => $this->nom,
            'apellidos' => $this->cognoms,
            'rol' => $this->perfil->nom,
            'mail' => $this->mail
        ];
    }
}
