<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

<head>

=======
<head>
>>>>>>> 8d7cf948bf2caab1970dfa5c3714bdb1e0d71d9b
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<<<<<<< HEAD

    <title>Sales system</title>

    <!-- Custom fonts for this template-->
   @include('layouts.theme.styles')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       @include('layouts.theme.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Headbar -->
               @include('layouts.theme.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="layout-px-spacing">
                @yield('content')
            </div>
              <!--  <div class="container-fluid">-->

                    <!-- Page Heading -->
                    

                    <!-- Content Row -->
                   
                </div>
                <!-- /.container-fluid -->
<div class="mt-4">
@include('layouts.theme.footer')
</div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->


            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
 
    </div>
    <!-- End of Page Wrapper -->
   
    <!-- Scroll to Top Button-->
=======
    <title>Sales system</title>
    @include('layouts.theme.styles')
</head>
<body id="page-top">
    <div id="wrapper">
        @include('layouts.theme.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.theme.header')
                <div class="layout-px-spacing">
                    <!-- This is where the content will be injected -->
                    @yield('content')
                </div>
                <div class="mt-4">
                    @include('layouts.theme.footer')
                </div>
            </div>
        </div>
    </div>

>>>>>>> 8d7cf948bf2caab1970dfa5c3714bdb1e0d71d9b
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<<<<<<< HEAD
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
=======
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> 8d7cf948bf2caab1970dfa5c3714bdb1e0d71d9b
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Bootstrap core JavaScript-->
  @include('layouts.theme.scripts')
</body>

</html>
=======
    @include('layouts.theme.scripts')
</body>
</html>
>>>>>>> 8d7cf948bf2caab1970dfa5c3714bdb1e0d71d9b
