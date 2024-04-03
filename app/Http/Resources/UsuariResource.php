<?php

namespace App\Http\Resources;

use App\Http\Resources\UsuariResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UsuariResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
