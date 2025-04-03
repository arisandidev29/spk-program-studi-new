<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bobot extends Model
{
    use HasFactory;
    protected $table = 'bobots';

    protected $fillable = [
        'name',
        'keterangan',
        'bobot',
        'normalisasi',
    ];

    public function kriteria() :HasMany{
        return $this->hasMany(Kriteria::class);
    }
}
