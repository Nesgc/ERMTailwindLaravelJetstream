<div>
    <x-danger-button wire:click="$set('open', true)" >
        Crear nueva solicitud
    </x-danger-button>

    <x-dialog-modal wire:model="open" >

        <x-slot name="title">
            Crear nueva solicitud
            
        </x-slot>  
        <x-slot name="content">

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">¡Imagen cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado.</span>
                
              </div>

            @if ($image)
            <img src ="{{$image->temporaryUrl()}}">
                
            @endif

            <div class="mb-4 mt-4">
                <x-label value="Titulo del post"/>
                <x-input type="text" class="w-full" wire:model.defer="econ"/>
                
                <x-input-error for="econ"/>

            </div>
          

            <div class="mb-4" wire:ignore>
                <x-label value="Contenido del post"/>
                
                <textarea id="editor" wire:model.defer="operador" class="form-control w-full" rows="6"></textarea>

                <x-input-error for="operador"/>

            </div>

            <div>
                <input type="file" wire:model="image" id="{{$identificador}}">
                <x-input-error for="image"/>
            </div>

        </x-slot> 
        <x-slot name="footer">
            <x-secondary-button class="mr-3" wire:click="$set('open',false)">
                Cancelar
            </x-secondary-button>

            <x-danger-button  wire:click="save" wire:loading.attr="disabled" wire:target="save, image" class="mr-3 disabled:opacity-25">
                Crear post
            </x-danger-button>

        </x-slot> 

    </x-dialog-modal>

    {{--  
        @push('js')
          
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
        
            .create( document.querySelector( '#editor' ) )
            .then(function(editor){
                

                editor.model.document.on('change:data', () =>{
                    @this.set('content', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
    </script>

    @endpush
    --}}
</div>
