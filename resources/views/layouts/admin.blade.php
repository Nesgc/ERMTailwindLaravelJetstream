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
<style>
    .loader{
        width: 100%;
        height: 100%;
        position: fixed;
        padding-top: 23%;
        padding-left: 45%;
        background: #333;
    }
    </style>
        @stack('css')
      
        


    </head>
<body class="font-sans antialiased">

    <div class="loader">
        <img src="{{ asset('img/circles.svg')}}" alt="">

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
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
     $(function(){
        setTimeout(() => {
            $(".loader").fadeOut(300);
        }, 200);  // 2000 milliseconds (or 2 seconds) delay
    });
</script>

    </body>
</html>
