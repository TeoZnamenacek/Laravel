<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clanak extends Model
{
    // Polja koja smijemo masovno popuniti (mass assignment)
    protected $fillable = [
        'naslov',
        'sadrzaj',
        'autor',
        'kategorija',
        'objavljeno',
        'slika',
    ];
}