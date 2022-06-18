<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PvDesignation extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'pv_id',
        'numero_envoi',
        'vice_procureur_name',
    ];

    protected $casts = [
        'created_at' => 'datetime: h:i Y M d',
    ];
}
