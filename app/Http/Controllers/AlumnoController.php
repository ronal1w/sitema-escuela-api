<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function mostrarAlumnos()
    {
        $alumnos = Alumno::all();
        return response()->json(['alumnos' => $alumnos]);
    }
}
