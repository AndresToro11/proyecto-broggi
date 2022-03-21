<?php

namespace App\Models;

use App\Models\Municipi;
use App\Models\Provincia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comarca extends Model
{
    use HasFactory;

    protected $table = 'comarques';
    public $timestamps = false;

    public function provincia(): BelongsTo
    {
        return $this->belongsTo(Provincia::class, 'provincies_id');
    }

    public function municipis(): HasMany
    {
        return $this->hasMany(Municipi::class, 'comarques_id');
    }
}
