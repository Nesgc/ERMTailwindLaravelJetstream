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
    @include('layouts.theme.styles')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free-6.4.2-web/css/all.min.css') }}">

    <style>
  

      
    </style>
    @stack('css')
</head>
<body class="layout-boxed">


   <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>


    



        <!-- Sidebar -->

        @include('layouts.theme.sidebar')
        
        <!-- Page Heading -->

       
                @include('layouts.theme.header')

 <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>


                <!-- Page Content -->
        <div id="content" class="main-content">

                    {{ $slot }}
                </div>

 </div>
                
    </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
      
    @include('layouts.theme.scripts')
    @livewireScripts

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    @stack('modals')




    <script>
        Livewire.on('alert', function(message) {
            Swal.fire(
                'Good job!',
                message,
                'success'
            )
        })
    </script>


</body>

</html>
