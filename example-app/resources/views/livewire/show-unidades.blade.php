<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('1.4.4 Las funciones de livewire no funcionan en la version ip creo ') }}
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
                <div class="flex justify-end gap-4">
                  <a x-data="{ tooltip: 'Delete' }" href="#">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6"
                      x-tooltip="tooltip"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                      />
                    </svg>
                  </a>
                  <a x-data="{ tooltip: 'Edite' }" href="#">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6"
                      x-tooltip="tooltip"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                      />
                    </svg>
                  </a>
                </div>
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
