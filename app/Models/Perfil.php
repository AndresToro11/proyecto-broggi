<?php

namespace App\Models;

use App\Models\Usuari;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfils';
    public $timestamps = false;

    /**
     * Get all of the usuaris for the Perfil
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuaris(): HasMany
    {
        return $this->hasMany(Usuari::class, 'perfils_id');
    }
}
