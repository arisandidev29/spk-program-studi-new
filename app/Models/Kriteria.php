<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kriteria extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'kriterias';
    protected $fillable = [
        'kriteria',
        'desc',
        'kategori',
        'bobot_id',
        'note'
    ];
    
    // Event saat data akan dibuat
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Ambil data terakhir untuk menentukan nomor berikutnya
            $lastKriteria = self::orderBy('id', 'desc')->first();
            $number = $lastKriteria ? $lastKriteria->sequence + 1 : 1;
            $model->sequence = $number;
            $model->kode_kriteria = 'C' . $number; // Contoh: C1, C2, dst.
        });
    }

    public function bobot():BelongsTo{
        return $this->belongsTo(Bobot::class);
    }

    public function PilihanJawaban() {
        return $this->hasMany(PilihanJawaban::class,'id_kriteria');
    }
}


