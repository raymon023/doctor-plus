<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
use Carbon\Carbon;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'motivo',
        'antec_pers_quirugicos',
        'antec_pers_patologicos',
        'evaluacion',
        'observacion',
        'diagnostico',
        'antec_here_fam',
        'hab_toxico',
        'hist_enf',
        'paciente_id',
        'turno_id',
        'fecha',
        'medico_id'
    ];



    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    public function turnos()
    {
        return $this->belongsTo(Turno::class, 'turno_id');
    }
}
