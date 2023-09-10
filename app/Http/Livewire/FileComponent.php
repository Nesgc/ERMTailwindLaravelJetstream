<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;

class FileComponent extends Component
{
    public $searchengine;
    public $file;
        public $openview = false;

    public function render()
    {
        if ($this->searchengine==""){
            $files = File::all();
        }else{
            $files = File::where('id', 'like', '%'. $this->searchengine.'%')->get();
        }
        
       

        return view('livewire.file-component', compact('files'));
        
       
    }
    public function view(File $file){
        $this->file = $file;
        $this->openview = true;
    }
}
