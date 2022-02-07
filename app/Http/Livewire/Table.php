<?php

namespace App\Http\Livewire;

use App\Models\Consulta;
use App\Models\Paciente;
use Livewire\Component;
use Carbon\Carbon;

class Table extends Component
{
    public $toDate, $fromDate, $consultas;

    public function mount()
    {

        $this->fromDate = null;
        $this->toDate = null;
        $this->consultas = [];
    }
    public function render()
    {
        $paciente = Paciente::where('medico_id', auth()->user()->medico_id);
        return view('livewire.table')->with('paciente', $paciente);
    }

    public function consultar()
    {

        $fromDate = Carbon::parse($this->fromDate)->startOfDay();
        $toDate = Carbon::parse($this->toDate)->endOfDay();
        $this->consultas = Consulta::with('pacientes', 'medico')
            ->whereBetween('fecha', [$fromDate, $toDate])
            ->orderBy('fecha', 'DESC')->get();
    }

    public function PDFreport(Consulta $consulta)
    {
        return $consulta;
    }
}
