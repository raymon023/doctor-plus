<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'medico_id', 'tiempo_uso'];

    public function medicos()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    /*   public function recetas()
    {
        return $this->belongsToMany(Receta::class);
    } */
}
