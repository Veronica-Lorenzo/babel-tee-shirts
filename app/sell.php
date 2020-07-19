<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $fillable = [
        'fec_vta',
        'monto_pago',
        'status_vta',
        'user_id'
    ];

    protected $table = 'sells';
}
