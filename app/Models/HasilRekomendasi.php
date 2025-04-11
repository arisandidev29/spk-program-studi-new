<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilRekomendasi extends Model
{
    protected $table = "hasil_rekomendasis";

    protected $fillable = [
        'user_id',
        'alternative_id',
        'vektor_v',
        'ranking'
    ];


    public function user () {
        return $this->belongsTo(User::class);
    }

    public function  alternative () {
       return $this->belongsTo(Alternative::class); 
    }

}
