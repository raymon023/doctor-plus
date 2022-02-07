<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluacionPre;

use PDF;
class PDFPreoperatoria extends Controller
{

    public function showPre()
    {
        $historial = EvaluacionPre::with('pacientes','medicos')->get();
        return view('Historial.Historial_preoperatoria')->with('historial', $historial);
    }

    public function ReportOperatoria(EvaluacionPre $data)
    {
        $data = PDF::loadView('Reportes/Preoperatoria_report', compact('data'));
        return $data->download('Preoperatoria Report.pdf');
        return redirect('/historial_diagnosticos');
    }
}
