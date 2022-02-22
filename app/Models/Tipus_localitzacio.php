<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
