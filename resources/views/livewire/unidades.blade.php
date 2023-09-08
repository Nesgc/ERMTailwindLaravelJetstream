
    <div wire:init="loadPosts">
        
        
        <table class="min-w-full divide-y divide-gray-200">
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
            <div class="px-6 py-4 flex items-center">
    
              <div class="flex items-center">
                <span>Mostrar</span>
                <select wire:model="cant" class="form-control px-4 mx-2">
                  <option class="flex items-center" value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option class="d-flex justify-content-start" value="100">100</option>
                </select>
    
                <span class="">Unidades</span>
              </div>
    
              <x-input class="flex-1 mx-3" type="text" wire:model="search" placeholder="Buscar">
                </x-input>
    
                @livewire('create-unit')
            </div>
    
            @if (count($posts))
                
            
            <table class="w-full border-collapse  bg-white text-left text-base text-gray-500">
                
                <thead class=" bg-gray-50">
              
                <tr>
                  <th scope="col" class="w-20 cursor-pointer px-6 py-4 font-medium text-gray-900"
                  wire:click="order('id')">ID 
                  {{--sort--}}
                @if ($sort == 'id')
                  @if ($direction == 'desc')
                    
                  <i class="fas fa-sort-alpha-up-alt float-right"></i> 
                @else
                <i class="fas fa-sort-alpha-down-alt float-right"></i> 
                @endif
    
                @else
                <i class="fas fa-sort float-right"></i> 
                @endif
    
               </th> 
                <th scope="col" class="w-25 cursor-pointer px-6 py-4 font-medium text-gray-900"
                  wire:click="order('title')">Unidad &nbsp
              
                  {{--sort--}}
                @if ($sort == 'title')
                  @if ($direction == 'desc')
                    
                  <i class="fas fa-sort-alpha-up-alt float-right"></i> 
                @else
                <i class="fas fa-sort-alpha-down-alt float-right"></i> 
                @endif
    
                @else
                <i class="fas fa-sort float-right"></i> 
                @endif
    
                  <th scope="col" class="cursor-pointer px-6 py-4 font-medium text-gray-900"
                  wire:click="order('content')">Operador &nbsp
                  
                  {{--sort--}}
                @if ($sort == 'content')
                @if ($direction == 'desc')
                  
                <i class="fas fa-sort-alpha-up-alt float-right"></i> 
              @else
              <i class="fas fa-sort-alpha-down-alt float-right"></i> 
              @endif
    
              @else
              <i class="fas fa-sort float-right"></i> 
              @endif
    
                
                </th>
           
                  <th scope="col" class="w-10 px-6 py-4 font-medium text-gray-900"
                  >Editar</th>
                </tr>
               
              </thead>
        
              <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @foreach ($posts as $item)
                    
                
                <tr class="hover:bg-gray-50">
                  <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="relative h-10 w-10">
                      <img src="{{Storage::url($item->image)}}">
                      <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                    </div>
                    <div class="">
                      <div class="text-base text-gray">{{$item->id}}</div>
                    </div>
                  </th>
                  <td class="px-6 py-4">
                    <span
                      class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-base font-semibold text-green-600"
                    >
                      <span class="h-1.5 w-1.5 rounded-full bg-green-600 "></span>
                      {{$item->econ}}
                    </span>
                  </td>
                  <td class="px-6 py-4 text-base">{!!$item->operador !!}</td>
                  
                  <td class="inline-flex items-center gap-3 px-6 py-4">
                 {{--  @livewire('edit-post', ['post' => $post], key($post->id)) --}}
                    
                 <a class="btn btn-blue" wire:click="view({{$item}})">
                  <i class="fa-solid fa-eye"></i>
              </a>
    
                    <a class="btn btn-green" wire:click="edit({{$item}})">
                      <i class="fas fa-edit"> </i>
                  </a>
    
                  <a class="btn btn-red" wire:click="$emit('deletePost', {{$item->id}})">
                    <i class="fas fa-trash"></i>
                  </a>
    
                  </td>
    
                </tr>
                
                  </td>
                  
                  @endforeach
                  <x-dialog-modal wire:model='openedit'>
        
                    <x-slot name='title'>
                        Editar la unidad
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
                            
                                <x-input wire:model="post.econ" type="text" class="w-full"/>
                        </div>
                
                        <div class="mb-4">
                            <x-label value="Contenido del Post"/>
                                <textarea wire:model="post.operador" rows="6" class="form-control w-full"></textarea>
                        </div>
                
                        <div class="d-flex flex-row">
                          <div>
                              <p>Selecciona PDF</p>
                              <input type="file" wire:model="pdf" id="{{$identificador}}">
                              <x-input-error for="pdf"/>
                          </div>
                          <div>
                              <p>Foto de la unidad</p>
                              <input type="file" wire:model="image" id="{{$identificador}}">
                              <x-input-error for="image"/>
                          </div>
              </div>
                    </x-slot> 
                    
                    <x-slot  name='footer'>
                        <x-secondary-button wire:click="$set('openedit', false)">
                            Cancelar
                        </x-secondary-button>
                
                        <x-danger-button wire:click="update" wire:loading.attr="disabled" class="disabled:opacity-25">
                            Actualizar
                        </x-danger-button>
                    </x-slot>
                
                </x-dialog-modal>
    
    
                {{-- MOSTRAR VISTA --}}
                <x-dialog-modal wire:model='openview'>
        
                  <x-slot name='title'>
                      Unidad
                  </x-slot>
              
                  <x-slot name='content'>
              
                      <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">¡Imagen cargando!</strong>
                          <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado.</span>
                          
                        </div>
              
                      @if ($image)
                      <img class="" height="" src ="{{$image->temporaryUrl()}}">
                          @else
                          <img class="" height="" width="" src="{{Storage::url($post->image)}}">
                      @endif
              
                      <div class="mt-4 mb-4">
                          <x-label class="text-xl" value="Numero de unidad"/>
                          
                          <div class="text-base text-gray text-bolder">{{$post->econ}}</div>
                      </div>
              
                      <div class="mt-4 mb-4">
                        <x-label class="text-xl" value="Operador"/>
                        
                        <div class="text-base text-gray text-bolder">{!! $post->operador!!}</div>
                    </div>
            
                       <!-- New PDF Viewer Section -->

                       <a href="{{Storage::url($post->pdf)}}" target="_blank">
                        <button class="btn btn-primary">Ver Factura</button>
                    </a>


                  </x-slot> 
                  
                  <x-slot  name='footer'>
                      <x-secondary-button wire:click="$set('openview', false)">
                          Cancelar
                      </x-secondary-button>
              
                     
                  </x-slot>
              
              </x-dialog-modal>
              </tbody>
            </table>
    
            @if ($posts->hasPages())
            <div class="px-6 py-3">
              {{$posts->links()}}
            </div>
            @endif
    
            @else
            <div  class="px-6 py-4">
                <p wire:loading.remove>No existe ningún registro coincidente</p>
            </div>
            <div class="flex justify-center">
              <img wire:loading src="{{asset('https://s11.gifyu.com/images/Sg9fn.gif')}}" class="w-60 p-10">
       </div>
            @endif
    
          </div>
     
            </table>
    
            @push('js')
              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"> </script>
              <script>  
              
              Livewire.on('deletePost', postId =>{
                Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
    
        Livewire.emitTo('show-unidades', 'delete', postId);
    
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
              }
    
            
      })
    });
             </script>
            @endpush
        
            @push('js')
            <script>
              document.addEventListener('DOMContentLoaded', () => {
    window.livewire.on('openPdf', data => {
        window.open(data.url, '_blank');
    });
});

            </script>
    @endpush
          </div>
    
