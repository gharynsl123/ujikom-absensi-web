<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Absensi
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('template/css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />

    <!-- cloudtables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">

    <!-- js cloudtables -->
    <script rel="stylesheet" href="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script rel="stylesheet" href="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
</head>

<body class="g-sidenav-show bg-body">
    
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs rounded-lg fixed-start m-2 bg-color"
        id="sidenav-main">
        @yield('sidebar')
    </aside>
    <main class="main-content position-relative max-height-vh-100 border-radius-lg">

        <!-- Navbar -->
        @include('layouts.app')
        <!-- End Navbar -->

        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>

        <footer class="footer py-4">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                            document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </main>
</body>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
</script>
<script>
$(document).ready(function {
    $('#myTable').DataTable();
});
</script>
<!--   Core JS Files   -->
<!-- <script src="{{asset('template/js/core/popper.min.js')}}"></script> -->
<!-- <script src="{{asset('template/js/core/bootstrap.min.js')}}"></script> -->
<script src="{{asset('template/js/plugins/perfect-scrollbar.min.js')}}"></script>
<!-- <script src="{{asset('template/js/plugins/smooth-scrollbar.min.js')}}"></script> -->
<!-- <script src="{{asset('template/js/plugins/chartjs.min.js')}}"></script> -->

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('template/js/material-dashboard.min.js?v=3.0.4')}}"></script>

</html>