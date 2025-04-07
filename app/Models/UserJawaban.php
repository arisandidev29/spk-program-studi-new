<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJawaban extends Model
{
    protected $fillable = [
        'user_id',
        'kriteria_id',
        'alternative_id',
        'pilihan_jawaban_id',
    ];
    protected $table = 'user_jawabans';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pilihanJawaban()
    {
        return $this->belongsTo(PilihanJawaban::class);
    }
}
