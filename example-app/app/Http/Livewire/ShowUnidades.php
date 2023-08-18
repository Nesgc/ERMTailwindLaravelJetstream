<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowUnidades extends Component
{
   
    public $search;
    public $sort = 'id';
    public $direction = 'desc';
 
    protected $listeners=['render'];

    public function render()
    {

    $posts=Post::where('title', 'like','%'. $this->search.'%')
                ->orWhere('content', 'like','%'. $this->search.'%')
                ->orderBy($this->sort, $this->direction)
                ->get();

        return view('livewire.show-unidades', compact('posts'));
    }

        public function order($sort){
           if ($this->sort == $sort){

            if ($this->direction=='asc'){
                $this->direction='desc';
           }else{
            $this->direction='asc';
           }
           
           
         } else{

            $this->sort = $sort;
            $this->direction = 'desc';
        }
    }
}

