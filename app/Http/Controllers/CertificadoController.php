<?php

namespace App\Http\Controllers;

use App\Http\Requests\CertficadoStore;
use App\Models\Certificado;
use App\Models\Paciente;
use Illuminate\Http\Request;
use PDF;

class CertificadoController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::with('ciudades', 'medicos')->where('medico_id', auth()->user()->medico_id)->get();

        return view('eisdoctor.Certificado', compact('pacientes'));
    }

    public function store(CertficadoStore $request)
    {
        $certificdo = new Certificado();
        $certificdo->paciente_id = $request->input('paciente_id');
        $certificdo->medico_id = $request->input('medico_id');
        $certificdo->nombre = $request->input('nombre');
        $certificdo->cedula = $request->input('cedula');
        $certificdo->edad = $request->input('edad');
        $certificdo->ciudad = $request->input('ciudad');
        $certificdo->sexo = $request->input('sexo');
        $certificdo->diagnostico = $request->input('diagnostico');
        $certificdo->reposo = $request->input('reposo');
        $certificdo->save();

        $certificdo = PDF::loadView('Reportes/Certificado_medico', compact('certificdo'));
        return $certificdo->download('Certificado-medico.pdf');
        return redirect('/certificado-medico');
    }
}
