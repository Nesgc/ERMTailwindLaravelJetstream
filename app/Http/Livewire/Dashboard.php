<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $shouldRender = false;

    public $isLoading = true;
    protected $listeners = ['renderComponent' => 'renderComponent'];

    public function mount() {
        // Simulate a delay
        sleep(0);
    
        $this->isLoading = false;
    }
    public function renderComponent() {
        $this->shouldRender = true;
    }
    public function render()
    {

        return $this->shouldRender ? view('livewire.dashboard') : null;
    }
}
