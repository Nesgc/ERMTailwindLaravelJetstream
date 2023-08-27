<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-40">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
           
            
            @livewire('show-unidades', ['title' => 'Este es un titulo de prueba'])
            @livewire('table1')
            @livewire('components.alert')
            @livewire('dash2')
        </div>
    </div>
</x-app-layout>
