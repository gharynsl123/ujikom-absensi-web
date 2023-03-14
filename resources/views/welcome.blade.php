<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js"></script>

    <!-- Bootstraps -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

</head>

<body class="bg-info">

    <div class="container d-flex justify-content-center vh-100">
        <div class="card shadow-lg rounded-lg align-self-center p-4">
            <p class="mx-5 font-weight-bolder align-self-center">Weclome</p>
            <p class="text-secondary">Please Choose According To Your Level</p>

            <a type="button" href="/admin/dashboard" class="btn btn-primary btn-lg btn-block">
                <span>I'M Admin</span>
            </a>
            <a type="button" href="/guru" class="btn btn-secondary btn-lg btn-block">
                
                <span>I'M Teacher</span>
            </a>
            <a type="button" href="/kaprodi" class="btn btn-primary btn-lg btn-block">
                <i class="material-icons"></i>
                
                <span>I'M head of study program</span>
            </a>
            <a type="button" href="/siswa" class="btn btn-secondary btn-lg btn-block">
                <i class="material-icons"></i>
                <span>I'M Student</span>
            </a>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>