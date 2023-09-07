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
        
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free-6.4.2-web/css/all.min.css')}}">
        
        <style>
            .loader{
                width: 100%;
                height: 100%;
                position: fixed;
                padding-top: 23%;
                padding-left: 45%;
                background: #e64c4c;
            }
            </style>
    </head>
    <body id="page-top">
        <div id="wrapper">
            <!-- Sidebar -->
            @include('layouts.theme.sidebar')


    <div class="loader">
        <img src="{{ asset('img/grid.svg')}}" alt="">

    </div>

        <x-banner />

        <div class="min-h-screen bg-blue-100 ">
            
                 
          
        
            <!-- Page Heading -->
            @include('layouts.theme.header')
            <!-- Page Content -->
            <div class="d-flex flex-row">
                
            
            </nav></div>
            <div><main>
                {{ $slot }}
            </main></div></div>
        </div>
              <div class="mt-4">
                    @include('layouts.theme.footer')
                </div>
        </div></div>
    </div>
</div>
</div>
         <!-- Scripts -->
    @include('layouts.theme.scripts')
    @livewireScripts

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(function(){
               setTimeout(() => {
                   $(".loader").fadeOut(300);
               }, 200);  // 2000 milliseconds (or 2 seconds) delay
           });
       </script>
        @stack('modals')

      
        @stack('js')
        

        <script>
            Livewire.on('alert',function(message){
                Swal.fire(
  'Good job!',
  message,
  'success'
)})
        </script>

 
    </body>
</html>
