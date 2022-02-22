<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedient extends Model
{
    use HasFactory;

    protected $table = 'expedients';
    public $timestamps = false;

    /**
     * Get all of the cartas_trucades for the Expedient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   public function cartas_trucades(): HasMany
    {
        return $this->hasMany(Carta_trucada::class, 'expedients_id');
    }

    /**
     * Get the estat_expedient that owns the Expedient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estat_expedient(): BelongsTo
    {
        return $this->belongsTo(Estat_expedient::class, 'estats_expedients_id');
    }
}
