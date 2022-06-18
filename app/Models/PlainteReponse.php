<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlainteReponse extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'plainte_id',
        'reference_plainte',
        'reponse',
        'vice_procureur_name',
    ];

    protected $casts = [
        'created_at' => 'datetime: h:i Y M d',
    ];
}
