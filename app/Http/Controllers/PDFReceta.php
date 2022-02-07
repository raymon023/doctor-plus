<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;
use PDF;

class PDFReceta extends Controller
{

    public function recetas()
    {
        $recetas = Receta::with('pacientes', 'medicos')->get();
        return view('Historial.Historial_recetas')
            ->with('recetas', $recetas);
    }

    public function recetaPDF(Receta $receta)
    {
        $receta = PDF::loadView('Reportes/Recetas-detalle', compact('receta'));
        $customPaper = array(0, 0, 360, 360);
        $receta->setPaper($customPaper);
        return $receta->download('Recetas-detalle.pdf');
        return redirect('/historial_diagnosticos');
    }
}
