<?php

use App\Http\Livewire\Table;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\EnfermedadController;
use App\Http\Controllers\EvolucionDa;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\MedicamentosController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\NacionalidadController;
use App\Http\Controllers\NCF\NcfController;
use App\Http\Controllers\NCFCreate;
use App\Http\Controllers\OcupacionesController;
use App\Http\Controllers\OrdenDiariaC;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PDFConsulta;
use App\Http\Controllers\PDFDiagnostico;
use App\Http\Controllers\PDFPreoperatoria;
use App\Http\Controllers\PDFReceta;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\ReferimientoC;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\SeguroController;
use App\Http\Controllers\Servicios\ServiciosMedicos;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Facturacion;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['register' => false]);


Route::middleware(['auth'])->group(function () {

    Route::get('/Dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('medicos', MedicoController::class);
    Route::resource('users', UserController::class);
    Route::resource('ciudades', CiudadController::class);
    Route::resource('ocupaciones', OcupacionesController::class);
    Route::resource('religiones', ReligionController::class);
    Route::resource('nacionalidades', NacionalidadController::class);
    Route::resource('medicamentos', MedicamentosController::class);
    Route::resource('enfermedades', EnfermedadController::class);
    Route::resource('examenes', ExamenController::class);
    Route::resource('seguros', SeguroController::class);
    Route::resource('pacientes', PacienteController::class);
    Route::resource('citas', CitasController::class);
    Route::resource('consultas', ConsultaController::class);
    Route::resource('analisis', AnalisisController::class);
    Route::resource('diagnosticos', DiagnosticoController::class);
    Route::resource('recetas', RecetaController::class);
});

Route::get('servicios-medicos', [ServiciosMedicos::class, 'index'])->name('servicios.medicos.index');
Route::post('servicios-medicos/store', [ServiciosMedicos::class, 'store'])->name('servicios.medicos.store');
Route::put('servicios-medicos/{s}/actualizar', [ServiciosMedicos::class, 'actualizar'])->name('servicios.medicos.update');
Route::delete('servicios-medicos/{s}', [ServiciosMedicos::class, 'eliminar'])->name('servicios.medicos.delete');

Route::get('/referimiento-medico', [ReferimientoC::class, 'index'])->name('referimiento.index');
Route::post('/referimiento-medico/store', [ReferimientoC::class, 'store'])->name('referimiento.store');

Route::get('/evolucion-diaria', [EvolucionDa::class, 'index'])->name('evolucion.index');
Route::post('/evolucion-diaria/store', [EvolucionDa::class, 'store'])->name('evolucion.store');

Route::get('/ordenes-diarias', [OrdenDiariaC::class, 'index'])->name('orden.diaria.index');
Route::post('/ordenes-diarias/store', [OrdenDiariaC::class, 'store'])->name('orden.diaria.store');

Route::get('/certificado-medico', [CertificadoController::class, 'index'])->name('certificado.index');
Route::post('/certificado-medico/create', [CertificadoController::class, 'store'])->name('certificado.store');


Route::get('/historial_consulta', [PDFConsulta::class, 'consulta'])->name('reports_date');
Route::get('/historial_consulta/{consulta}', [PDFConsulta::class, 'PDFCon'])->name('consulta.pdf');
Route::get('/historial_consultas_fechas', Table::class)->name('range.date');


Route::post('consultas/guardar', [ConsultaController::class, 'saveOperatoria'])->name('guardar.Operatoria');
Route::get('historial_preoperatoria', [PDFPreoperatoria::class, 'showPre'])->name('historial.preoperatoria');


Route::get('historial_preoperatoria/{data}', [PDFPreoperatoria::class, 'ReportOperatoria'])->name('Preoperarotia.pdf');
Route::get('consultas/{consulta}/preoperatoria', [ConsultaController::class, 'Preoperatoria'])->name('Preoperatoria');


Route::get('/historial_diagnosticos', [PDFDiagnostico::class, 'diagnosticos'])->name('historial_diagnosticos');
Route::get('/historial_diagnosticos/{diagnostico}', [PDFDiagnostico::class, 'PDFdiag'])->name('diagnosticos.pdf');


Route::get('/historial_recetas', [PDFReceta::class, 'recetas'])->name('recetas');
Route::get('/historial_recetas/{receta}', [PDFReceta::class, 'recetaPDF'])->name('receta.pdf');


Route::get('/ncf', [NcfController::class, 'index'])->name('ncf.index');

Route::get('/numero-de-comprobantes-fiscales', [NCFCreate::class, 'index'])->name('sale.ncf');
Route::post('/compras-ncf/store', [NCFCreate::class, 'store'])->name('sale.ncf.store');

Route::post('/numero-de-comprobantes-fiscales/secuencia', [NCFCreate::class, 'secuencia'])->name('ncf.secuencia');

Route::get('facturar-servicios', Facturacion::class)->name('facturar-servicios');
