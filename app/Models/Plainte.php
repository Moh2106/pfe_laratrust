<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;

    protected $fillable = [
        'contre_inconnu',
        'source_de_la_plainte',
        'type_de_la_plainte',
        'reference',
        'date_inscription',
        'date_des_faits',
        'lieu_des_faits',
        'objet',
        'nom_plaignant1',
        'prenom_plaignant1',
        'genre_plaignant1',
        'cin_plaignant1',
        'avocat_plaignant1',
        'nom_plaignant2',
        'prenom_plaignant2',
        'genre_plaignant2',
        'cin_plaignant2',
        'avocat_plaignant2',
    ];
}