<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('1.4.4 Las funciones de livewire no funcionan en la version online creo ') }}
        </h2>
    </x-slot>
    
    <table class="min-w-full divide-y divide-gray-200">
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
        <div class="px-6 py-4 flex items-center">
            <x-input class="flex-1 mr-3" type="text" wire:model="search" placeholder="Buscar">
            </x-input>

            @livewire('create-post')
        </div>

        @if ($posts->count())
            
        
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            
            <thead class="d-flex flex-row bg-gray-50">
          
            <tr>
              <th scope="col" class="w-24 cursor-pointer px-6 py-4 font-medium text-gray-900"
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
            <th scope="col" class="flex flex-row cursor-pointer px-6 py-4 font-medium text-gray-900"
              wire:click="order('title')">TITLE &nbsp
          
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
              wire:click="order('content')">CONTENT&nbsp
              
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
       
              <th scope="col" class=" px-6 py-4 font-medium text-gray-900"
              wire:click="order">Edit</th>
            </tr>
           
          </thead>
    
          <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            @foreach ($posts as $post)
                
            
            <tr class="hover:bg-gray-50">
              <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                <div class="relative h-10 w-10">
                  <img
                    class="h-full w-full rounded-full object-cover object-center"
                    src=
                    
                  />
                  <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                </div>
                <div class="">
                  <div class=" text-grsay">{{$post->id}}</div>
                </div>
              </th>
              <td class="px-6 py-4">
                <span
                  class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600"
                >
                  <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                  {{$post->title}}
                </span>
              </td>
              <td class="px-6 py-4">{{$post->content}}</td>
              
              <td class="px-6 py-4">
                @livewire('edit-post', ['post' => $post], key($post->id))
              </td>
            </tr>
            
              </td>
              @endforeach
          </tbody>
        </table>
        @else
        <div class="px-6 py-4">
            No existe ningún registro coincidente
        </div>
        @endif
      </div>
 
        
   

   
            
        </table>
    

   
</div>
