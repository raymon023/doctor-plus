<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Consulta;
use DB;

class Paciente extends Model
{

    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'fecha_nac',
        'sexo',
        'lugar_trabj',
        'estado_civ',
        'direccion',
        'tel1',
        'tel2',
        'poliza',
        'tificacion',
        'email',
        'medico_id',
        'seguro_id',
        'ciudad_id',
        'religion_id',
        'nacionalidad_id',
        'ocupacion_id'
    ];

    public function certificados()
    {
        return $this->hasMany(Certificado::class);
    }

    public function medicos()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }


    public function ciudades()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_id');
    }

    public function religiones()
    {
        return $this->belongsTo(Religion::class, 'religion_id');
    }

    public function nacionalidaddes()
    {
        return $this->belongsTo(Nacionalidad::class, 'nacionalidad_id');
    }

    public function seguros()
    {
        return $this->belongsTo(Seguro::class, 'seguro_id');
    }

    public function ocupaciones()
    {
        return $this->belongsTo(Ocupacion::class, 'ocupacion_id');
    }
    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }

    public function analisis()
    {
        return $this->hasMany(Analisi::class);
    }
    public function diagnosticos()
    {
        return $this->hasMany(Diagnostico::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->nombre} {$this->apellido}";
    }
}
