<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'cod_seguro', 'rnc', 'email', 'tel1', 'tel2', 'medico_id'];

    public function medicos()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }
}
