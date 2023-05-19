@extends('layouts.mainview')

@section('sidebar')
<ul class="nav nav-pills d-flex row">
    <li class="nav-item my-3">
        <div class="nav-link fw-light text-white d-flex align-item-center">
            <span class="material-icons-round">
                dashboard
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none"
                href="{{route('absen.index')}}">Dashboard</a>
        </div>
    </li>
    <li class="nav-item">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                table_view
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none"
                href="{{route('user.index')}}">User</a>
        </div>
    </li>
    <li class="nav-item my-3">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                assignment_ind
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none"
                href="{{route('user.create')}}">Create
                User</a>
        </div>
    </li>
    <li class="nav-item">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                summarize
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="#">Mouthly
                Report</a>
        </div>
    </li>
    <li class="nav-item mt-3 ms-3 ">
        <p class="text-uppercase opacity-50 fw-bolder text-white" disabled>
            <b>Absensi Siswa</b>
        </p>
    </li>
    <li class="nav-item">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                pending_actions
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="/absen">
                Absen</a>
        </div>
    </li>
    <li class="nav-item">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                approval
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="/izin">
                Ajukan Izin</a>
        </div>
    </li>
    <li class="nav-item mt-4 ms-3 ">
        <p class="text-uppercase opacity-50 fw-bolder text-white" disabled>
            <b>Account Page</b>
        </p>
    </li>
    <li class="nav-item">
        <div class="nav-link active d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                person
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="#">
                Profile</a>
        </div>
    </li>
    <li class="nav-item">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                settings
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="#">
                setting</a>
        </div>
    </li>
</ul>
@endsection

@section('content')
<div class="container">
    <div class="d-flex gap-4 h-auto justify-content-center row">
        <img src="{{ asset('storage/icon-web.png') }}" alt="#"
            class="rounded col-md-3 rounded-circle img-thumbnail mb-3" width="250px">
        <div class="card col-md-8 p-3">

        <form action="" method="post">
            <p class="fw-bolder m-0">Your Identiti Card</p>
            <hr>
            <div class="table-responsive">
                <table class="table table-borderless">
                    <tr class="text-capitalize">
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="" id="" value="{{Auth::user()->name}}"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{Auth::user()->email}}</td>
                    </tr>
                    <tr class="text-capitalize">
                        <td>kelas</td>
                        <td>:</td>
                        <td>11 rpl b</td>
                    </tr>
                    <tr class="text-capitalize">
                        <td>NISN</td>
                        <td>:</td>
                        <td>0989899</td>
                    </tr>
                </table>
            </div>
            <div class="d-flex mt-auto">
                <button type="button" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-warning ms-2">Setting</button>
            </div>
        </div>

    </form>
        <p></p>

        <p class="text-center fs-3 fw-bold">You are admin here</p>

    </div>


</div>
@endsection
