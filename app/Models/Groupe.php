<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable = [
        'Id_Groupe',
        'Libelle',
        'Secteur',
        'Specialite',
        'Niveau',
        'Annee'
    ];
}
