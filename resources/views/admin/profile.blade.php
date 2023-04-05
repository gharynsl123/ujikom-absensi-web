@extends('admin.layouts.mainview')

@section('sidebar')
<ul class="nav nav-pills d-flex row">
    <li class="nav-item my-3">
        <div class="nav-link fw-light text-white d-flex align-item-center">
            <span class="material-icons-round">
                dashboard
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="/home">Dashboard</a>
        </div>
    </li>
    <li class="nav-item">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                table_view
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="{{route('user.index')}}">User</a>
        </div>
    </li>
    <li class="nav-item my-3">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                assignment_ind
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="{{route('user.create')}}">Create
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
        <img src="smk cikoko.png"  class="rounded-circle col-md-3 img-thumbnail">
        <div class="card col-md-8 p-3">
            <p class="fw-bolder m-0">Your Identiti Card</p>
            <hr>
            <div class="table-responsive">
                <table class="table table-borderless">
                    <tr class="text-capitalize">
                        <td>Nama</td>
                        <td>:</td>
                        <td>Adinda</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>Adindamasni@gmail.com</td>
                    </tr>
                    <tr class="text-capitalize">
                        <td>kelas</td>
                        <td>:</td>
                        <td>11 rpl b</td>
                    </tr>
                </table>
            </div>
            <div class="d-flex mt-auto">
                <button type="button" class="btn btn-success">Edit Bio</button>
                <button type="button" class="btn btn-warning ms-2">Setting</button>
            </div>
        </div>
    </div>

    <p class="fw-bold fs-3 mt-5">Absen Kamu</p>

    <div class="table-responsiven bg-white rounded-3 shadow-lg">
        <table class="table table-hover align-items-center m-0">
            <thead class="table-primary">
                <tr>
                    <th class="text-uppercase text-secondary ps-3">
                        Name</th>
                    <th class="text-uppercase text-secondary ps-2">
                        NISN</th>
                    <th class="text-center text-uppercase text-secondary">
                        Status</th>
                    <th class="text-center text-uppercase text-secondary">
                        Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex px-2 py-3">
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="text-sm">John Michael</h6>
                                <p class="text-secondary mb-0">john@creative-tim.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle ">
                        <p class="mb-0">08127634</p>
                    </td>
                    <td class="align-middle text-center mb-0 py-4 px-0 text-sm">
                        <span class="badge bg-success mb-0 px-2">Hadir</span>
                    </td>
                    <td class="align-middle text-center mb-0 px-0 py-4">
                        <span class="text-secondary">23/04/18</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection