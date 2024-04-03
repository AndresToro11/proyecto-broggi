<?php

namespace App\Models;

use App\Models\Comarca;
use App\Models\Carta_trucada;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincies';
    public $timestamps = false;

    /**
     * Get all of the cartes_trucades for the Provincia
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartes_trucades(): HasMany
    {
        return $this->hasMany(Carta_trucada::class, 'provincies_id');
    }

    public function comarques(): HasMany
    {
        return $this->hasMany(Comarca::class, 'provincies_id');
    }
}
