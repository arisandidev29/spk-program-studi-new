<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    protected $table = 'alternatives';

    protected $fillable = [
        'kode',
        'name'
    ];

    
}
