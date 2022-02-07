<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Turno extends Model
{
    use HasFactory;

    protected $fillable = ['turno', 'fecha', 'status', 'medico_id', 'paciente_id'];

    private function  turno($turno,$status)
    {
      if($status == 1){
          $this->turno;

      }
    }

    public function pacientes()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    public function consultas()
    {
        return $this->hasOne(Consulta::class);
    }
}
