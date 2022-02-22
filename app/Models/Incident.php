<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $table = 'incidents';
    public $timestamps = false;

    /**
     * Get all of the comments for the incidents
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartes_trucades(): HasMany
    {
        return $this->hasMany(Carta_trucada::class, 'incidents_id');
    }

    /**
     * Get the tipus_incidents that owns the incidents
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipu_incident(): BelongsTo
    {
        return $this->belongsTo(Tipus_incident::class, 'classes_incidents_id');
    }
}
