<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlainteDesignation extends Model
{
    use HasFactory;

    protected $fillable = [
        'plainte_id',
        'reference_plainte',
        'vice_procureur_name',
    ];

    protected $casts = [
        'created_at' => 'datetime: h:i Y M d',
    ];
}
