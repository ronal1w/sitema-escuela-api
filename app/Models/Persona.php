<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = ['nombre'];

    // Resto de propiedades y métodos de tu modelo Persona
}
