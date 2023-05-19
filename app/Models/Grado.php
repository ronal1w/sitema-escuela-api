<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table = 'grado';
    protected $fillable = ['nombre', 'profesor_id'];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'profesor_id');
    }

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'grado_id');
    }
}
