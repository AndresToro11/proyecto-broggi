<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dades_personals extends Model
{
    use HasFactory;

    protected $table = 'dades_personals';
    public $timestamps = false;

    /**
     * Get all of the cartes_trucades for the dades_personals
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartes_trucades(): HasMany
    {
        return $this->hasMany(Carta_trucada::class, 'dades_personals_id');
    }
}
