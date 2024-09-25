<?php

namespace App\Livewire\Http\Fincas;

use App\Models\Finca;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

#[Title('Editar Finca')]
class EditarFinca extends Component
{
    public $fincaId;

    #[Rule('required', message: 'El nombre es obligatorio')]
    #[Rule('min:3', message: 'El nombre debe tener al menos 3 caracteres')]
    public $nombre;

    #[Rule('nullable', message: 'La ubicación latitud debe ser numérica')]
    public $ubicacion_lat;

    #[Rule('nullable', message: 'La ubicación longitud debe ser numérica')]
    public $ubicacion_long;

    #[Rule('nullable', message: 'El tipo de suelo debe ser una cadena')]
    public $tipo_de_suelo;

    #[Rule('nullable', message: 'La superficie debe ser numérica')]
    public $superficie;

    public function mount($finca)
    {
        $this->fincaId = $finca->id;
        $this->nombre = $finca->nombre;
        $this->ubicacion_lat = $finca->ubicacion_lat;
        $this->ubicacion_long = $finca->ubicacion_long;
        $this->tipo_de_suelo = $finca->tipo_de_suelo;
        $this->superficie = $finca->superficie;
    }

    public function actualizarFinca()
    {
        $this->validate();

        $finca = Finca::find($this->fincaId);
        $finca->update([
            'nombre' => $this->nombre,
            'ubicacion_lat' => $this->ubicacion_lat,
            'ubicacion_long' => $this->ubicacion_long,
            'tipo_de_suelo' => $this->tipo_de_suelo,
            'superficie' => $this->superficie,
        ]);

        return redirect('/fincas');
    }

    public function render()
    {
        return view('livewire.http.fincas.editar-finca');
    }
}
