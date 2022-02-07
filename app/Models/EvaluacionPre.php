<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionPre extends Model
{
    use HasFactory;

    protected $table = 'evaluacion_pres';

    public function pacientes()
    {
        return  $this->BelongsTo(Paciente::class, 'paciente_id');
    }


    public function medicos()
    {
        return  $this->BelongsTo(Medico::class, 'medico_id');
    }
}
