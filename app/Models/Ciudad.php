<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = 'ciudads';

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
