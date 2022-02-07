<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'medico_id'];

    public function medicos()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    public function pacientes()
    {
        return $this->hasMany(Medico::class);
    }
}
