<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pv extends Model
{
    use HasFactory;

    protected $fillable = [
            'police_judiciaire',
            'classe_de_la_police',
            'source_pv',
            'heure_realisation',
            'date_enregistrement',
            'numero_envoi',
            'date_inscription',
            'type_enregistrement',
            'sujet_pv',
            'contre_inconnu',
            'nom_personne_pv1',
            'prenom_personne_pv1',
            'genre_personne_pv1',
            'cin_personne_pv1',
            'avocat_personne_pv1',
            'nom_personne_pv2',
            'prenom_personne_pv2',
            'genre_personne_pv2',
            'cin_personne_pv2',
            'avocat_personne_pv2',
    ];
}
