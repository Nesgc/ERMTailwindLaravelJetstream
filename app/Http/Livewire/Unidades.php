<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\unit;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Unidades extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $post, $image, $identificador;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';
    public $readytoLoad = false;
    public $openedit = false;

    public $openview = false;
    protected $listeners=['render', 'delete'];

    protected $queryString = [
        'cant' => ['except' => '10'], 
        'sort' => ['except' => 'id'], 
        'direction' => ['except' => 'desc'], 
        'search'  => ['except' => '']
    ];
   
    protected $rules = [
        'post.title'=> 'required',
        'post.content'=> 'required',
    ];

    public function mount(){
        $this->identificador = rand();
        $this->post = new unit();
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        if($this->readytoLoad){
            $posts=unit::where('econ', 'like','%'. $this->search.'%')
                ->orWhere('operador', 'like','%'. $this->search.'%')
                ->orWhere('id', 'like','%'. $this->search.'%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);
        }else{
            $posts=[];
        }


   /* $posts=Post::where('title', 'like','%'. $this->search.'%')
                ->orWhere('content', 'like','%'. $this->search.'%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);*/

        return view('livewire.unidades', compact('posts'));
    }

        public function loadPosts(){
            $this->readytoLoad = true;
            
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

    

    public function edit(unit $post){
        $this->post = $post;
        $this->openedit = true;
    }

    public function view(unit $post){
        $this->post = $post;
        $this->openview = true;
    }

    public function update(){
        $this->validate();

        if ($this->image) {
            Storage::delete([$this->post->image]);

            $this->post->image = $this->image->store('public/units');
        }

        $this->post->save();

        $this->reset(['openedit','image']);

        $this->identificador = rand();

        $this->emit('alert', 'El post se actualizó satisfactoriamente');


    }
    public function delete(unit $post){
        $post->delete();
    }
}

