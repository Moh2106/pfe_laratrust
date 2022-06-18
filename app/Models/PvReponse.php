<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PvReponse extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'pv_id',
        'numero_envoi',
        'vice_procureur_name',
        'reponse',
    ];

    protected $casts = [
        'created_at' => 'datetime: h:i Y M d',
    ];
}
