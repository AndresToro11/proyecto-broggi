<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
