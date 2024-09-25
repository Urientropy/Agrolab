<?php

// app/Livewire/Http/Fincas/FincasIndex.php

namespace App\Livewire\Http\Fincas;

use App\Models\Finca;
use Livewire\Component;
use Livewire\WithPagination;

class FincasIndex extends Component
{


    use WithPagination;
    public $layout = 'layouts.app';


    public $search = '';

    protected $listeners = ['fincaCreated' => '$refresh', 'fincaUpdated' => '$refresh', 'fincaDeleted' => '$refresh'];

    public function redirigir()
    {
        return redirect()->route('fincas.crear');
    }

    public function render()
    {
        $fincas = Finca::where('nombre', 'like', '%' . $this->search . '%')
                      ->orWhere('tipo_de_suelo', 'like', '%' . $this->search . '%')
                      ->paginate(10);

                      return view('livewire.http.fincas.fincas-index', ['fincas' => $fincas]);
                        }

    public function deleteFinca(Finca $finca)
    {
        $finca->delete();
        return redirect('/fincas');
    }
}