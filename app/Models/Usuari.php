<?php

namespace App\Models;

use App\Models\Perfil;
use App\Models\Carta_trucada;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuari extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuaris';
    public $timestamps = false;

    /**
     * Get all of the cartes_trucades for the Usuari
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartes_trucades(): HasMany
    {
        return $this->hasMany(Carta_trucada::class, 'usuaris_id');
    }

    /**
     * Get the perfil that owns the Usuari
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function perfil(): BelongsTo
    {
        return $this->belongsTo(Perfil::class, 'perfils_id');
    }
}
