<?php

namespace App\Models;

use App\Models\Carta_trucada;
use App\Models\Tipus_incident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
