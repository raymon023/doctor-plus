<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerReferimieto;
use Illuminate\Http\Request;
use PDF;
use App\Models\Paciente;
use App\Models\Referimiento;

class ReferimientoC extends Controller
{


    public function index()
    {
        $referimiento = Paciente::with('medicos')->where('medico_id', auth()->user()->medico_id)->get();
        return view('eisdoctor.Referimiento')->with('referimiento', $referimiento);
    }

    public function store(StorerReferimieto $request)
    {
        $referim = new Referimiento();
        $referim->nombre = $request->input('nombre');
        $referim->edad = $request->input('edad');
        $referim->referido = $request->input('referido');
        $referim->observacion = $request->input('observacion');
        $referim->hist_clinica = $request->input('hist_clinica');
        $referim->paciente_id = $request->input('paciente_id');
        $referim->medico_id = $request->input('medico_id');

        $referim->save();

        $referim = PDF::loadView('Reportes/Referimiento_doctor', compact('referim'));
        return $referim->download('Referimiento.pdf');
        return redirect('/referimiento-medico');
    }
}
