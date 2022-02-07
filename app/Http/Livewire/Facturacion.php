<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paciente;
use App\Models\TipoNcf;

class Facturacion extends Component
{


    public function render()
    {
        return view('livewire.facturacion', [
            'pacientes' => Paciente::where('medico_id', auth()->user()->medico_id)->get(),
            'tiponcf' => TipoNcf::where('medico_id', auth()->user()->medico_id)->get()
        ]);
    }
}
