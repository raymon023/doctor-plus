<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medico extends Model
{
    use HasFactory;
    protected $table = 'medicos';

    protected $fillable = [

        'nombre',
        'apellido',
        'cedula',
        'direccion',
        'telefono',
        'especialidad',
    ];

    public function certificados()
    {
        return $this->hasMany(Certificado::class);
    }


    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function ciudades()
    {
        return $this->HasMany(Ciudad::class);
    }

    public function ocupaciones()
    {
        return $this->HasMany(Ocupacion::class);
    }

    public function religiones()
    {
        return $this->HasMany(Religion::class);
    }

    public function nacionalidades()
    {
        return $this->HasMany(Nacionalidad::class);
    }

    public function enfermedades()
    {
        return $this->HasMany(Enfermedad::class);
    }

    public function pacientes()
    {
        return $this->HasMany(Paciente::class);
    }

    public function seguros()
    {
        return $this->HasMany(Seguro::class);
    }

    public function consultas()
    {
        return $this->HasMany(Consulta::class);
    }

    public function analisis()
    {
        return $this->hasMany(Analisi::class);
    }
    public function diagnosticos()
    {
        return $this->hasMany(Diagnostico::class);
    }

    public function register()
    {
        return $this->hasMany(Registerncf::class);
    }

    public function secuencia()
    {
        return $this->hasMany(Secuencia::class);
    }
}
