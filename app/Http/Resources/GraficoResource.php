<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GraficoResource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);

        return  [
            $this->cartas_trucades[0]->provincia->nom
        ];

        /*$provincias = [];
        $encontrado = false;
        for ($i=0; $i < count($query); $i++) { 
            //foreach ($provincias as $provincia => $num) {
                
                if(array_key_exists($query[$i], $provincias)){
                    $provincias[$query[$i]] =+ 2;
                    $encontrado = true;
                }
            //}
            if($encontrado == false){
                $provincias[$query[$i]] = 1;
            }
            $encontrado = false;
        }

        return $provincias;*/
    }
}
