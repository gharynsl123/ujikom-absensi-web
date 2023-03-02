<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Absensi Web</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- bootstap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Sidebar ======= -->
    <header id="header" class="m-2 rounded">
        <div class="d-flex flex-column">
            <nav id="navbar" class="nav-menu navbar">
                @include('admin.menu')
            </nav>
        </div>
    </header><!-- Side Bar -->

    <main id="main" class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto">
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item d-flex align-items-center">
                                <a href="{{'asset/pages/sign-in.html'}}"
                                    class="nav-link text-body font-weight-bold px-0">
                                    <span class="d-sm-inline d-none">Login</span>
                                </a>
                            </li>
                            <li class="nav-item d-flex align-items-center ms-4">
                                <a href="{{'asset/pages/sign-in.html'}}"
                                    class="nav-link text-body font-weight-bold px-0">
                                    <span class="d-sm-inline d-none">Register</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="m-2 rounded">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>iPortfolio</span></strong>
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

</body>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

</html>