<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvolucion;
use App\Models\EvolucionDiaria;
use App\Models\Paciente;
use PDF;

class EvolucionDa extends Controller
{

    public function index()
    {
        $evolucionD = Paciente::with('medicos')->where('medico_id', auth()->user()->medico_id)->get();
        return view('eisdoctor.Evolucion_diaria')->with('evolucionD', $evolucionD);
    }


    public function store(StoreEvolucion $request)
    {
        $evolucion = new EvolucionDiaria();
        $evolucion->nombre = $request->input('nombre');
        $evolucion->sexo = $request->input('sexo');
        $evolucion->edad = $request->input('edad');
        $evolucion->evolucion = $request->input('evolucion');
        $evolucion->paciente_id = $request->input('paciente_id');
        $evolucion->medico_id = $request->input('medico_id');
        $evolucion->save();
        $evolucion = PDF::loadView('Reportes/Evolucion_diaria', compact('evolucion'));
        return $evolucion->download('evolucion_diaria.pdf');
        return redirect('/evolucion-diaria');
    }
}
