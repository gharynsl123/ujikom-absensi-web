<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Web</title>
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- bootstap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- boxicon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- css style -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <!-- dashboard style -->
    <!-- <link id="pagestyle" href="{{asset ('template/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" /> -->
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bx bx-menu mobile-nav-toggle d-xl-none"></i>


    <!-- ======= SideBar ======= -->
    <aside id="header" class="sidenav navbar m-2 rounded">
        <div class="d-flex flex-column">
            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li>
                        <a href="index.html" class="nav-link active">
                            <i class="bx bx-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="create-user.html" class="nav-link">
                            <i class="bx bx-user"></i>
                            <span>Create Staff User</span>
                        </a>
                    </li>
                    <li>
                        <a href="absensi-perbulan.html" class="nav-link">
                            <i class="bx bx-book"></i>
                            <span>Data Absensi Perbulan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio" class="nav-link">
                            <i class="bx bx-server"></i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Main -->
    <main class="main-content max-height-vh-100 vh-100 border-radius-lg ">
        <div class="d-flex  justify-content-end">
            <!-- Navbar -->
            <nav class="navbar container navbar-main m-0" id="navbarBlur" data-scroll="true">
                <div class="container-fluid p-3 shadow-sm mb-5 justify-content-end bg-white rounded">
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex align-items-center">
                            <a href="#" class="nav-link text-body font-weight-bold">
                                <i class='bx bx-user'></i>
                                Sign In
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->

        </div>

        <div class="container-fluid py-4">
            <div class="row">
                halaman satu dashboard
            </div>
        </div>
    </main>
    <!--End Main -->

</body>
<!-- AOS Animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- main js -->
<script src="{{asset('template/js/main.js')}}"></script>

<script>
AOS.init();
</script>

</html>