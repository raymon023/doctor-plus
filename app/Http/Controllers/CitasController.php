<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Turno;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CitasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //

        $paciente = Paciente::pluck('nombre', 'id');
        $citas = Turno::with('pacientes')->whereDate('fecha', '=', Carbon::now()->format('Y-m-d'))->get();
        return view('eisdoctor.Citas')->with('paciente', $paciente)
            ->with('citas', $citas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        if ($request->status == 0) {

            $turno = 99;
        }
        $turnoNew = new Turno;
        $turnoNew->medico_id = $request->medico_id;
        $turnoNew->paciente_id = $request->paciente_id;
        $turnoNew->fecha = $request->fecha;
        $turnoNew->status = $request->status;
        $turnoNew->turno = $turno;
        $turnoNew->save();
        return redirect()->route('citas.index');
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
    public function edit(Turno $cita)
    {

        return view('eisdoctor.Citas')->with('cita', $cita);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turno $cita)
    {
        if ($cita->turno) {
        }
        $cita->update($request->all());

        return redirect()->route('citas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function determiaTurno()
    {
    }
}
