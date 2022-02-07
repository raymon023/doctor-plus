<?php

namespace App\Http\Controllers;

use App\Models\Diagnostico;
use Illuminate\Http\Request;
use PDF;

class PDFDiagnostico extends Controller
{

    public function diagnosticos()
    {
        $diagnosticos = Diagnostico::with('pacientes', 'medicos')->get();
         return view('Historial.Historial_diagnosticos', compact('diagnosticos'));
    }

    public function PDFdiag(Diagnostico $diagnostico)
    {
        $diagnostico = PDF::loadView('Reportes/Diagnostico_detalle', compact('diagnostico'));
        return $diagnostico->download('Diagnostico_detalle.pdf');
        return redirect('/historial_diagnosticos');
    }
}
