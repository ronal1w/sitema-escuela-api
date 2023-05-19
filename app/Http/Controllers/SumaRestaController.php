<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaRestaController extends Controller
{
    public function SumaDivicion(Request $request)
    
        {
            $numero1 = $request->input('numero1');
            $numero2 = $request->input('numero2');
    
            if (empty($numero1) || empty($numero2)) {
                return response()->json([
                    'mensaje' => 'Por favor, proporciona ambos números.'
                ], 400);
            }
    
            $suma = $numero1 + $numero2;
    
            if ($numero2 != 0) {
                $division = $numero1 / $numero2;
            } else {
                $division = null;
            }
    
            return response()->json([
                'suma' => $suma,
                'division' => $division
        ]);
    }
}
