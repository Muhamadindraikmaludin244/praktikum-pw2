<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsi';
    protected $fillable = ['id', 'nama', 'ibukota', 'latitude', 'longtitude'];

    public $timestamps = false;

    public function kabkota(): HasMany
    {
        return $this->hasMany(KabKota::class);
    }
}
