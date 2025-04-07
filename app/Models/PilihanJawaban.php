<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PilihanJawaban extends Model
{
    protected $table = 'pilihan_jawabans';

    protected $fillable = [
        'name',
        'nilai',
        'id_kriteria'
    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
    public function UserJawaban()
    {
        return $this->hasMany(UserJawaban::class);
    }
}
