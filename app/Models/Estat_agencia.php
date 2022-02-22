<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estat_agencia extends Model
{
    use HasFactory;

    protected $table = 'estats_agencies';
    public $timestamps = false;

    /**
     * Get the carta_trucada_has_agencia associated with the Estat_agencia
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carta_trucada_has_agencia(): HasOne
    {
        return $this->hasOne(Carta_trucada_has_agencia::class, 'estats_agencies_id');
    }
}
