<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Faskes extends Model
{
    use HasFactory;

    protected $table = 'faskes';
    protected $fillable = ['id', 'nama', 'nama_pengelola', 'alamat', 'website', 'email', 'rating', 'latitude', 'longtitude', 'jenis_faskes_id', 'kategori_id', 'kabkota_id'];

    public $timestamps = false;

    public function jenisfaskes(): HasMany
    {
        return $this->hasMany(JenisFaskes::class);
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function kabkota(): BelongsTo
    {
        return $this->belongsTo(KabKota::class);
    }
}
