<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Models\ServicioMedico;
use Illuminate\Http\Request;

class ServiciosMedicos extends Controller
{
    public function index()
    {
        $serviciosM = ServicioMedico::where('medico_id', auth()->user()->medico_id)->get();
        return view('Facturacion.Servicios_medicos')
            ->with('serviciosM', $serviciosM);
    }

    public function store(Request $request)
    {
        $servicios = new ServicioMedico();
        $servicios->nombre_servicio = $request->input('nombre_servicio');
        $servicios->precio = $request->input('precio');
        $servicios->cobertura_seguro = $request->input('cobertura_seguro');
        $servicios->medico_id = $request->input('medico_id');
        $servicios->save();
        return redirect()->route('servicios.medicos.index');
    }

    public function actualizar(Request $request, ServicioMedico $s)
    {
        $s->nombre_servicio = $request->input('nombre_servicio');
        $s->precio = $request->input('precio');
        $s->cobertura_seguro = $request->input('cobertura_seguro');
        $s->medico_id = $request->input('medico_id');
        $s->save();
        return redirect()->route('servicios.medicos.index');
    }

    public function eliminar(ServicioMedico $s)
    {
        $s->delete();
        return redirect()->route('servicios.medicos.index');
    }
}
