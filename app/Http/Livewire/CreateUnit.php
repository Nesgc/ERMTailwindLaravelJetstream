<?php

namespace App\Http\Livewire;

use App\Models\unit;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUnit extends Component
{

    use WithFileUploads;
    public $open = false;

    public $econ, $operador, $image, $pdf, $factura, $identificador;

    public function mount(){
        $this->identificador = rand();
    }

    protected $rules = [
        'econ' => 'required|max:100',
        'operador' => 'required|min:1',
        'image' => 'required|image|max:4048',
        'factura' => 'required|file|mimes:pdf|max:10240', 
        'pdf' => 'required|file|mimes:pdf|max:10240', // max 10MB

    ];

   
    public function save(){

        $this->validate();

        $image = $this->image->store('public/units');
        $pdf = $this->pdf->store('public/pdfs');
        $factura = $this->factura->store('public/pdfs/facturas');


        unit::create([
            'econ' => $this->econ,
            'operador'=> $this->operador,
            'image' => $image,
            'factura' => $factura,
            'pdf' => $pdf,
            ]);

            $this->reset(['open', 'econ', 'operador','image', 'pdf', 'factura']);

            $this->identificador = rand();

            $this->emitTo('unidades','render');
            $this->emit('alert', 'El post se creo satisfactoriamente');
              }

    public function render()
    {
        return view('livewire.create-unit');
    }
}
