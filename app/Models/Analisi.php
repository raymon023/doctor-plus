<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisi extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'observacion',
        'fecha',
        'medico_id',
        'paciente_id',
        'analisis_no'
    ];

    public function medicos()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }
}
