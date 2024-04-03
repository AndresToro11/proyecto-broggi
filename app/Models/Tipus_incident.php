<?php

namespace App\Models;

use App\Models\Incident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipus_incident extends Model
{
    use HasFactory;

    protected $table = 'tipus_incidents';
    public $timestamps = false;

    /**
     * Get all of the incidents for the tipus_incidents
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidents(): HasMany
    {
        return $this->hasMany(Incident::class, 'classes_incidents_id');
    }
}
