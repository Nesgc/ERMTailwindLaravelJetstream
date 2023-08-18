<div>
    <x-danger-button wire:click="$set('open', true)" >
        Crear nuevo post
    </x-danger-button>

    <x-dialog-modal wire:model="open" >

        <x-slot name="title">
            Crear nuevo post
        </x-slot>  
        <x-slot name="content">
           
            <div class="mb-4">
                <x-label value="Titulo del post"/>
                <x-input type="text" class="w-full" wire:model.defer="title"/>
                
            </div>

            <div class="mb-4">
                <x-label value="Contenido del post"/>
                
                <textarea wire:model.defer="content" class="form-control w-full" rows="6"></textarea>
                
            </div>

        </x-slot> 
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-secondary-button>

            <x-danger-button wire:click="save">
                Crear post
            </x-danger-button>
        </x-slot> 

    </x-dialog-modal>
</div>
