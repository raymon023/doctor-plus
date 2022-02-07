<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteStore;
use App\Models\Ciudad;
use App\Models\Nacionalidad;
use App\Models\Ocupacion;
use App\Models\Paciente;
use App\Models\Religion;
use App\Models\Seguro;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $pacientes = Paciente::with('seguros')->where('medico_id', auth()->user()->medico_id)->get();
        return view('eisdoctor.Paciente')->with('pacientes', $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $seguros = Seguro::all();
        $ciudades = Ciudad::all();
        $religiones = Religion::all();
        $nacionalidades = Nacionalidad::all();
        $ocupaciones = Ocupacion::all();
        return view('eisdoctor.Paciente_create', compact('seguros', 'ciudades', 'religiones', 'nacionalidades', 'ocupaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Paciente::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        $seguros = Seguro::all();
        $ciudades = Ciudad::all();
        $religiones = Religion::all();
        $nacionalidades = Nacionalidad::all();
        $ocupaciones = Ocupacion::all();
        return view('eisdoctor.Paciente_edit', compact('paciente', 'seguros', 'ciudades', 'nacionalidades', 'religiones', 'ocupaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteStore $request, Paciente $paciente)
    {
        //
        $paciente->update($request->all());
        return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('eliminar', 'ok');
    }
}
