<?php

namespace App\Http\Controllers;

use App\Http\Requests\NCFIM;
use App\Models\NCFMaestro;
use App\Models\Registerncf;
use App\Models\TipoNcf;
use App\Http\Requests\RegisterStore;
use Illuminate\Http\Request;

class NCFCreate extends Controller
{
    public function index()
    {
        $tipo = TipoNcf::all();
        $ncfs = NCFMaestro::where('medico_id', auth()->user()->medico_id)
            ->orderBy('codigo_ncf', 'ASC')->get();
        return view('NCF.Crear_ncf', compact('tipo', 'ncfs'));
    }

    public function store(NCFIM $request)
    {
        $myncf = new NCFMaestro();
        $myncf->codigo_ncf = $request->input('codigo_ncf');
        $myncf->nombre_ncf = $request->input('nombre_ncf');
        $myncf->parte_fija = $request->input('parte_fija');
        $myncf->cantidad = $request->input('cantidad');
        $myncf->medico_id = $request->input('medico_id');
        $myncf->save();

        return redirect('/numero-de-comprobantes-fiscales');
    }

    public function secuencia(Request $request, NCFIM $prueba)
    {
        Registerncf::create($request->all());
        // $app = Registerncf::find($prueba);
        // $app->aprobacion = $request->input('aprobacion');
        // $app->codigo = $request->input('codigo');
        // $app->tipo_ncf = $request->input('tipo_ncf');
        // $app->aprobacion = $request->input('parte_fija');
        // $app->aprobacion  = $request->input('secuencia');
        // $prueba->cantidad = $app->increment('quantity');
        // $app->medico_id   = $request->input('medico_id');
        // $app->aprobacion = $request->input('aprobacion');
        return $request->toArray();
        // return redirect('/numero-de-comprobantes-fiscales');
    }
}
