<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
    protected $fillable = [
        'fromateur',
        'module',
        'salle',
        'seance',
        'joure',
        'id_seance'
    ];
}
