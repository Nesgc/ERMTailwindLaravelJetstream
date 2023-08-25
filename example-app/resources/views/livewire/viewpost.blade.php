
<div>
   


    <a class="btn btn-green" wire:click="$set('open', true)">
        <i class="fa-solid fa-eye"></i>
    </a>

<x-dialog-modal wire:model='open'>
    
    <x-slot name='title'>
        Editar el post 
    </x-slot>

    <x-slot name='content'>

        <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">¡Imagen cargando!</strong>
            <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado.</span>
            
          </div>

        @if ($image)
        <img src ="{{$image->temporaryUrl()}}">
            @else
            <img src="{{Storage::url($post->image)}}">
        @endif

        <div class="mb-4">
            <x-label value="Titulo del Post"/>
            
                <x-input wire:model="post.title" type="text" class="w-full"/>
        </div>

        <div  id="editor" class="mb-4">
            <x-label  id="editor" value="Contenido del Post"/>
                <textarea id="editor" wire:model="post.content" rows="6" class="form-control w-full" ></textarea>
        </div>

        <div>
            <input type="file" wire:model="image" id="{{$identificador}}">
            <x-input-error for="image" />
        </div>
    </x-slot> 
    
    <x-slot name='footer'>
        <x-secondary-button class="mr-3" wire:click="$set('open', false)">
            Cancelar
        </x-secondary-button>

       
    </x-slot>

</x-dialog-modal>

</div>
