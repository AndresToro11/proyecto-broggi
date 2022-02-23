<?php

namespace App\Models;

use App\Models\Carta_trucada;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipus_localitzacio extends Model
{
    use HasFactory;

    protected $table = 'tipus_localitzacions';
    public $timestamps = false;

    /**
     * Get all of the cartes_trucades for the Tipus_localitzacio
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartes_trucades(): HasMany
    {
        return $this->hasMany(Carta_trucada::class, 'tipus_localitzacions_id');
    }
}
