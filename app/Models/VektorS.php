<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VektorS extends Model
{
    protected $table = "vektor_s";

    protected $fillable = [
        'user_id',
        'alternative_id',
        'vektor_s',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function alternative()
    {
        return $this->belongsTo(Alternative::class);
    }
}
