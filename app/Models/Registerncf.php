<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registerncf extends Model
{
    protected $fillable = ['aprobacion', 'codigo', 'tipo_ncf', 'quantity', 'parte_fija', 'secuencia'];
 // protected $guarded = [];
    use HasFactory;

    public function secuencia()
    {
        return $this->hasMany(Secuencia::class);
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    // public function setSecuenciaAtributte()
    // {
    //     $this->attributes['secuencia'] = $this->parte_fija  . $this->codigo;
    // }
/*  ciencia ambientes
 una disciplina al servicio de la humanidad
 discurso del presidente mojika uruguai

 antecesdentes y fundamentos de la etica e investigacion
 cuestiones eticas en ciencia y tecnologia
 progreso y ciencia


 problemas eticos y de la seguridad informatica asociados al uso de esta tecnologia
 */
}
