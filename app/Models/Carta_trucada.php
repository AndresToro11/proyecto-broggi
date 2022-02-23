<?php

namespace App\Models;

use App\Models\Usuari;
use App\Models\Agencia;
use App\Models\Incident;
use App\Models\Municipi;
use App\Models\Expedient;
use App\Models\Provincia;
use App\Models\Dades_personals;
use App\Models\Tipus_localitzacio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Carta_trucada extends Model
{
    use HasFactory;

    protected $table = 'cartes_trucades';
    public $timestamps = false;
    
    public function incident(): BelongsTo
    {
        return $this->belongsTo(Incident::class, 'cicles_id');
    }

    public function expedient(): BelongsTo
    {
        return $this->belongsTo(Expedient::class, 'expedients_id');
    }

    public function tipus_localitzacio(): BelongsTo
    {
        return $this->belongsTo(Tipus_localitzacio::class, 'tipus_localitzacions_id');
    }

    public function usuari(): BelongsTo
    {
        return $this->belongsTo(Usuari::class, 'usuaris_id');
    }

    public function provincia(): BelongsTo
    {
        return $this->belongsTo(Provincia::class, 'provincies_id');
    }

    public function municipi(): BelongsTo
    {
        return $this->belongsTo(Municipi::class, 'municipis_id');
    }

    public function dades_personals(): BelongsTo
    {
        return $this->belongsTo(Dades_personals::class, 'dades_personals_id');
    }

    public function agencia(): BelongsToMany
    {
        return $this->belongsToMany(Agencia::class, 'cartes_trucades_has_agencies', 'cartes_trucades_id', 'agencies_id')->withPivot('estats_agencies_id');
    }
}
