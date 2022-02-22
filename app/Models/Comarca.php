<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comarca extends Model
{
    use HasFactory;

    protected $table = 'comarques';
    public $timestamps = false;

    /**
     * Get the provincia that owns the Comarca
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provincia(): BelongsTo
    {
        return $this->belongsTo(Provincia::class, 'provincies_id');
    }

    /**
     * Get all of the municipis for the Comarca
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipis(): HasMany
    {
        return $this->hasMany(Municipi::class, 'comarques_id');
    }
}
