<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipi extends Model
{
    use HasFactory;

    protected $table = 'municipis';
    public $timestamps = false;

    /**
     * Get the comarca that owns the Municipi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comarca(): BelongsTo
    {
        return $this->belongsTo(Comarca::class, 'comarques_id');
    }

    /**
     * Get all of the cartas_trucades for the Municipi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartas_trucades(): HasMany
    {
        return $this->hasMany(Carta_trucada::class, 'municipis_id');
    }

    /**
     * Get all of the agencies for the Municipi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agencies(): HasMany
    {
        return $this->hasMany(Agencia::class, 'municipis_id');
    }
}
