<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
        'nom_talla'
    ];

    protected $table = 'sizes';
}
