<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'hist_clinica',
        'diagnostico',
        'medico_id',
        'paciente_id'

    ];

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }
    public function medicos()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }
}
