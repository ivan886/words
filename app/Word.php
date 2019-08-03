<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'palabras';
    public $timestamps = false; 
    protected $fillable = [
        'palabra', 'tema','sound'
    ];

   
}