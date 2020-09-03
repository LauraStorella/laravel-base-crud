<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Colonne gestite
    protected $fillable = [
        'title',
        'description',
        'year',
        'rating'
    ];
}
