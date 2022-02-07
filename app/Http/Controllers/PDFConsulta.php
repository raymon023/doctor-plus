<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Seguro;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PDFConsulta extends Controller
{
    public function consulta()
    {
        $consultas = Consulta::with('pacientes', 'medico')
            ->where('medico_id', auth()->user()->medico_id)
            ->whereDate('fecha', Carbon::today())->get();

        return view('Historial.Historial_consultas')
            ->with('consultas', $consultas);
    }

   /*  public function consulta_date(Request $request)
    {

        $fi = Carbon::parse($request->fecha_inicial)->startOfDay();
        $ff = Carbon::parse($request->fecha_final)->endOfDay();
        $consultas = Consulta::with('pacientes', 'medico')
        ->whereBetween('fecha', [$fi, $ff])
            ->orderBy('fecha', 'DESC')->get();

        return view('Historial.Historial_consultas', compact('consultas'));
    } */

    public function PDFCon(Consulta $consulta)
    {
        $consulta = PDF::loadView('Reportes/Consulta_detalle', compact('consulta'));
        return $consulta->download('Consulta_detalle.pdf');
        return redirect('/historial_consulta');
    }
}
