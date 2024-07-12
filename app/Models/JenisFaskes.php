<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisFaskes extends Model
{
    use HasFactory;

    protected $table = 'jenis_faskes';
    protected $fillable = ['id', 'nama'];

    public $timestamps = false;

    public function faskes(): HasMany
    {
        return $this->hasMany(Faskes::class);
    }
}
