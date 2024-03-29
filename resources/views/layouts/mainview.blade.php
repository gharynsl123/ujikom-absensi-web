<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Siswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

</head>

<body style="background-color: #F4FAFF;">
    <!-- NavBar Constant -->
    @include('layouts.app')

    <!-- SideBar -->
    <div style="background-color: #040B14; width: 280px"
        class=" offcanvas offcanvas-start m-2 rounded fw-light text-white" data-bs-scroll="true"
        data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header shadow-sm">
            <p class="offcanvas-title bold fw-bolder text-uppercase" id="offcanvasWithBothOptionsLabel">
                <b> Smk Muhammadiyah 2</b>
            </p>
            <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            @yield('sidebar')
        </div>
    </div>

    <!-- Content -->
    <section>
        @yield('content')
    </section>

    <script>
        <script src = "https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity = "sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c="
        crossorigin = "anonymous" >

    </script>

    <script>

    $(document).ready(function() {
    $('#myTable').DataTable();
    });

    var konten = document.getElementById("konten");
    CKEDITOR.replace(konten, {
    width: '100%',
    extraPlugins: 'editorplaceholder',
    editorplaceholder: 'Deskripsi spesifikasi barang...',
    uiColor: '#CCEAEE'
    });
    CKEDITOR.config.allowedContent = true;
    </script>



    @yield('script')
</body>

</html>
