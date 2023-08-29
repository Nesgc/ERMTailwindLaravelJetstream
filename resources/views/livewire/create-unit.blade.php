<div>
    <x-danger-button wire:click="$set('open', true)" >
        Agregar nueva unidad
    </x-danger-button>

    <x-dialog-modal wire:model="open" >

        <x-slot name="title">
            Agregar nueva unidad
            
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
                <x-label value="Numero de la unidad"/>
                <x-input type="text" class="w-full" wire:model.defer="econ"/>
                
                <x-input-error for="econ"/>

            </div>
          

            <div class="mb-4" wire:ignore>
                <x-label value="Operador de la unidad"/>
                
                <textarea id="editor" wire:model.defer="operador" class="form-control w-full" rows="1"></textarea>

                <x-input-error for="operador"/>

            </div>

<div class="d-flex flex-row">
    <div class="mb-3">
        <label for="{{$identificador}}" class="form-label">Factura PDF</label>
        <input type="file" class="form-control" wire:model="factura" id="{{$identificador}}">
        <x-input-error for="factura" class="invalid-feedback"/>
    </div>

     
</div>
<div class="d-flex flex-row">
    <div class="mb-3">
        <label for="{{$identificador}}" class="form-label">Poliza de seguro PDF</label>
        <input type="file" class="form-control" wire:model="factura" id="{{$identificador}}">
        <x-input-error for="factura" class="invalid-feedback"/>
    </div>

     
</div>
<div class="d-flex flex-row">
    <div class="mb-3">
        <label for="{{$identificador}}" class="form-label">Tarjeta de Circulación PDF</label>
        <input type="file" class="form-control" wire:model="factura" id="{{$identificador}}">
        <x-input-error for="factura" class="invalid-feedback"/>
    </div>

     
</div>

<div class="d-flex flex-row">
    <div class="mb-3">
        <label for="{{$identificador}}" class="form-label"> PDF</label>
        <input type="file" class="form-control" wire:model="pdf" id="{{$identificador}}">
        <x-input-error for="pdf" class="invalid-feedback"/>
    </div>

     
</div>

<div class="d-flex flex-row">
<div class="mb-3">
    <label for="{{$identificador}}" class="form-label">Foto de la unidad</label>
    <input type="file" class="form-control" wire:model="image" id="{{$identificador}}">
    <x-input-error for="image" class="invalid-feedback"/>
</div>
</div>
        </x-slot> 
        <x-slot name="footer">
            <x-secondary-button class="mr-3" wire:click="$set('open',false)">
                Cancelar
            </x-secondary-button>

            <x-danger-button  wire:click="save" wire:loading.attr="disabled" wire:target="save, image, factura, pdf" class="mr-3 disabled:opacity-25">
                Agregar Unidad
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
