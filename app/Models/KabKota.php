<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KabKota extends Model
{
    use HasFactory;

    protected $table = 'kabkota';
    protected $fillable = ['id', 'nama', 'latitude', 'longtitude', 'provinsi_id'];

    public $timestamps = false;

    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function faskes(): HasMany
    {
        return $this->hasMany(Faskes::class);
    }
}
