<?php

namespace App\Models;

use App\Models\Expedient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estat_expedient extends Model
{
    use HasFactory;

    protected $table = 'estats_expedients';
    public $timestamps = false;

    /**
     * Get all of the expedients for the Estat_expedient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expedients(): HasMany
    {
        return $this->hasMany(Expedient::class, 'estats_expedients_id');
    }
}
