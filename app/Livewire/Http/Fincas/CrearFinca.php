<?php

// app/Livewire/Http/Fincas/CrearFinca.php

namespace App\Livewire\Http\Fincas;

use App\Models\Finca;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class CrearFinca extends Component
{
    public $nombre;
    public $ubicacion_lat;
    public $ubicacion_long;
    public $tipo_de_suelo;
    public $superficie;
    public $modalOpen = false;

    protected $rules = [
        'nombre' => 'required|min:3',
        'ubicacion_lat' => 'nullable|numeric',
        'ubicacion_long' => 'nullable|numeric',
        'tipo_de_suelo' => 'nullable|string',
        'superficie' => 'nullable|numeric',
    ];

    public function crearFinca()
    {
        $this->validate();

        $finca = Finca::create([
            'nombre' => $this->nombre,
            'ubicacion_lat' => $this->ubicacion_lat,
            'ubicacion_long' => $this->ubicacion_long,
            'tipo_de_suelo' => $this->tipo_de_suelo,
            'superficie' => $this->superficie,
        ]);

        $this->reset(['nombre', 'ubicacion_lat', 'ubicacion_long', 'tipo_de_suelo', 'superficie']);

        return redirect('/fincas');

    }

    

    public function render()
    {
        return view('livewire.http.fincas.crear-finca');
    }
}
