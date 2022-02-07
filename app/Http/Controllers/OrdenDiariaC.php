<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrdenDStore;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\OrdenDiaria;
use PDF;

class OrdenDiariaC extends Controller
{

    public function index()
    {
        $orden_diaria = Paciente::with('medicos')->where('medico_id', auth()->user()->medico_id)->get();
        return view('eisdoctor.Ordenes_diarias')->with('orden_diaria', $orden_diaria);
    }

    public function store(OrdenDStore $request)
    {
        $diaria = new OrdenDiaria();
        $diaria->nombre = $request->input('nombre');
        $diaria->sexo = $request->input('sexo');
        $diaria->edad = $request->input('edad');
        $diaria->orden1 = $request->input('orden1');
        $diaria->orden2 = $request->input('orden2');
        $diaria->paciente_id = $request->input('paciente_id');
        $diaria->medico_id = $request->input('medico_id');
        $diaria->save();

        $diaria = PDF::loadView('Reportes/Orden_diaria', compact('diaria'));
        return $diaria->download('Orden-diaria.pdf');
        return redirect('/ordenes-diarias')->with('save', 'ok');
    }
}
