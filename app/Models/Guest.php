<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    // Table associée (optionnel si le nom correspond à la convention)
    protected $table = 'guests';

    // Les champs qui peuvent être remplis via un formulaire ou un seeder
    protected $fillable = [
        'prenom',
        'name',
        'email',
        'phone',
        'password',
    ];
}
