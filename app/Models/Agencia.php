<?php

namespace App\Models;

use App\Models\Municipi;
use App\Models\Carta_trucada;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Agencia extends Model
{
    use HasFactory;

    protected $table = 'agencies';
    public $timestamps = false;

    /**
     * Get the municipi that owns the Agencia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipi(): BelongsTo
    {
        return $this->belongsTo(Municipi::class, 'municipis_id');
    }

    /**
     * The carta_trucada that belong to the Agencia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function carta_trucada(): BelongsToMany
    {
        return $this->belongsToMany(Carta_trucada::class, 'cartes_trucades_has_agencies', 'agencies_id', 'cartes_trucades_id');
    }
}
