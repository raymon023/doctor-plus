<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultaStore;
use App\Models\Consulta;
use App\Models\EvaluacionPre;
use App\Models\Medicamento;
use App\Models\Turno;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Laravel\Ui\Presets\Bootstrap;
use PDF;
use phpDocumentor\Reflection\Types\Boolean;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\returnSelf;

class ConsultaController extends Controller
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

    public function index(Request $request)
    {


        $medicamentos = Medicamento::where('medico_id', auth()->user()->medico_id)->get();
        $cons = Turno::with('pacientes')->where('medico_id', auth()->user()->medico_id)->whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->get();

        return view('eisdoctor.Consulta')
            ->with('cons', $cons)
            ->with('medicamentos', $medicamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consulta = Turno::with('pacientes')->get();
        return view('eisdoctor.Consultar')->with('consulta', $consulta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $consulta = Consulta::create($request->all() + [
            'fecha' => Carbon::now(),
        ]);
        return redirect()->route('consultas.index')->with('save', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($consulta)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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



    public function Preoperatoria($consulta)
    {

        return view('eisdoctor.PreOperatoria')->with('consulta', $consulta);
    }


    public function saveOperatoria(Request $request)
    {
        $evaluacion = new  EvaluacionPre();
        $evaluacion->fecha = $request->input('fecha');
        $evaluacion->codigo = $request->input('codigo');
        $evaluacion->nombre = $request->input('nombre');
        $evaluacion->edad = $request->input('edad');
        $evaluacion->sexo = $request->input('sexo');
        $evaluacion->direccion = $request->input('direccion');
        $evaluacion->val_dx = $request->input('val_dx');
        $evaluacion->plan_terapéutico = $request->input('plan_terapéutico');
        $evaluacion->angina =   $request->input('angina');
        $evaluacion->antec_ortopnea = $request->input('antec_ortopnea');
        $evaluacion->antec_disnea_parox_noct = $request->input('antec_disnea_parox_noct');
        $evaluacion->antec_palpitac = $request->input('antec_palpitac');
        $evaluacion->antec_iam = $request->input('antec_iam');
        $evaluacion->antec_mas6 = $request->input('antec_mas6');
        $evaluacion->antec_men6 = $request->input('antec_men6');
        $evaluacion->antec_evol = $request->input('antec_evol');
        $evaluacion->antec_tos = $request->input('antec_tos');
        $evaluacion->antec_excpetor = $request->input('antec_excpetor');
        $evaluacion->antec_hemotpisis = $request->input('antec_hemotpisis');
        $evaluacion->antec_tabaquismo = $request->input('antec_tabaquismo');
        $evaluacion->antec_asma = $request->input('antec_asma');
        $evaluacion->antec_neumonia = $request->input('antec_neumonia');
        $evaluacion->antec_tb = $request->input('antec_tb');
        $evaluacion->antec_dm = $request->input('antec_dm');
        $evaluacion->antec_nefropatia = $request->input('antec_nefropatia');
        $evaluacion->antec_hepatopia = $request->input('antec_hepatopia');
        $evaluacion->antec_etilismo = $request->input('antec_etilismo');
        $evaluacion->antec_alergia = $request->input('antec_alergia');
        $evaluacion->antec_sangrado = $request->input('antec_sangrado');

        $evaluacion->antec_medicamento = $request->input('antec_medicamento');
        $evaluacion->antec_otros = $request->input('antec_otros');
        $evaluacion->expl_ta = $request->input('expl_ta');
        $evaluacion->expl_fc = $request->input('expl_fc');
        $evaluacion->expl_fr = $request->input('expl_fr');
        $evaluacion->expl_corazon = $request->input('expl_corazon');
        $evaluacion->expl_gland_tiroide = $request->input('expl_gland_tiroide');
        $evaluacion->expl_pulsos = $request->input('expl_pulsos');
        $evaluacion->expl_soplos = $request->input('expl_soplos');
        $evaluacion->expl_pulmones = $request->input('expl_pulmones');
        $evaluacion->expl_abdomen = $request->input('expl_abdomen');
        $evaluacion->expl_ms_is = $request->input('expl_ms_is');
        $evaluacion->expl_ecg_ritmo = $request->input('expl_ecg_ritmo');
        $evaluacion->laboratorio = $request->input('laboratorio');
        $evaluacion->dx = $request->input('dx');
        $evaluacion->diag_comentario = $request->input('diag_comentario');
        $evaluacion->diag_riesgo = $request->input('diag_riesgo');
        $evaluacion->tx = $request->input('tx');
        $evaluacion->paciente_id = $request->input('paciente_id');
        $evaluacion->medico_id = $request->input('medico_id');
        $evaluacion->save();
        return redirect()->route('consultas.index');
    }
}
