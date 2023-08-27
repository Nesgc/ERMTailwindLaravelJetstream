<?php

namespace App\Http\Livewire;

use App\Models\unit;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUnit extends Component
{

    use WithFileUploads;
    public $open = false;

    public $econ, $operador, $image, $identificador;

    public function mount(){
        $this->identificador = rand();
    }

    protected $rules = [
        'econ' => 'required|max:100',
        'operador' => 'required|min:1',
        'image' => 'required|image|max:2048',
    ];

   
    public function save(){

        $this->validate();

        $image = $this->image->store('public/units');

        unit::create([
            'econ' => $this->econ,
            'operador'=> $this->operador,
            'image' => $image
            ]);

            $this->reset(['open', 'econ', 'operador','image']);

            $this->identificador = rand();

            $this->emitTo('unidades','render');
            $this->emit('alert', 'El post se creo satisfactoriamente');
              }

    public function render()
    {
        return view('livewire.create-unit');
    }
}
