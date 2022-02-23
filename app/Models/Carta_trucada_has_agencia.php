<?php

namespace App\Models;

use App\Models\Estat_agencia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carta_trucada_has_agencia extends Model
{
    use HasFactory;

    protected $table = 'cartes_trucades_has_agencies';
    public $timestamps = false;

    public function estat_agencia(): HasOne
    {
        return $this->hasOne(Estat_agencia::class, 'estats_agencies_id', 'cartes_trucades', 'agencies_id');
    }
}
