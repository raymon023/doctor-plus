<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Receta extends Model
{

    protected $fillable = [
        'medicamento1',
        'tiempo_uso1',
        'descripcion1',

        'medicamento2',
        'tiempo_uso2',
        'descripcion2',

        'medicamento3',
        'tiempo_uso3',
        'descripcion3',

        'medicamento4',
        'tiempo_uso4',
        'descripcion4',
        'medico_id',
        'paciente_id'
    ];

    use HasFactory;

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    public function medicos()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }
}
