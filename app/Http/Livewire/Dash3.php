<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\View\Components\AppLayout;
use Laravel\Fortify\RoutePath;

class Dash3 extends Component
{
    public function render()
    {
        return view('livewire.dash3')->layout('layouts.prueba');

    }
}
