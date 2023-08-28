<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>FGS test</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free-6.4.2-web/css/all.min.css')}}">
        
        @livewireStyles

        @stack('css')
      
         @section('styles')
<style>
    #loading-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 9999;
        display: flex; /* Change this to "flex" */
        justify-content: center;
        align-items: center;
    }
</style>
@endsection


    </head>
<body class="font-sans antialiased">
<div id="loading-screen" class="loading-screen d-flex justify-content-center align-items-center vh-100">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

        <x-banner />

        <div class="min-h-screen bg-blue-100 ">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
         @stack('js')
         @stack('scripts')
         
         
     

@push('head')
<!-- Styles -->
<link href="{{ asset('css/load.css') }}" rel="stylesheet">
<!-- Scripts -->
<script src="{{ asset('js/load.js')}}"></script>
@endpush

    </body>
</html>