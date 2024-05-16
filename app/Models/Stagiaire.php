<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'Matricule',
        'Nom',
        'Prenom',
        'Sexe',
        'Date_Naissance',
        'Lieu_Naissance',
        'Cin',
        'Tel',
        'Nom_Arabe',
        'Prenom_Arabe',
        'Date_Inscription',
        'Date_Dossier_Complet',
        'Motif_Admission',
        'Id_Groupe'
    ];
}
