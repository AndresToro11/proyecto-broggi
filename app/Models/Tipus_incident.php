<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
