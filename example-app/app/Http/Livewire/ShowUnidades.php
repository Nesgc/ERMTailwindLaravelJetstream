<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class ShowUnidades extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $search, $post, $image, $identificador;
    public $sort = 'id';
    public $direction = 'desc';
    public $cant;
    public $openedit = false;

    protected $queryString = [
        'cant'
    ];
   
    protected $rules = [
        'post.title'=> 'required',
        'post.content'=> 'required',
    ];

    public function mount(){
        $this->identificador = rand();
        $this->post = new Post();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
    protected $listeners=['render'];

    public function render()
    {

    $posts=Post::where('title', 'like','%'. $this->search.'%')
                ->orWhere('content', 'like','%'. $this->search.'%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);

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

    

    public function edit(Post $post){
        $this->post = $post;
        $this->openedit = true;
    }

    public function update(){
        $this->validate();

        if ($this->image) {
            Storage::delete([$this->post->image]);

            $this->post->image = $this->image->store('public/posts');
        }

        $this->post->save();

        $this->reset(['openedit','image']);

        $this->identificador = rand();

        $this->emit('alert', 'El post se actualizó satisfactoriamente');

    }
}

