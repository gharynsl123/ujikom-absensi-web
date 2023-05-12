@extends('layouts.mainview')

@if (auth()->user()->level=="siswa")
@include('home.siswa')
@else

@section('sidebar')
<ul class="nav nav-pills d-flex row">
    <li class="nav-item my-3">
        <div class="nav-link active fw-light text-white d-flex align-item-center">
            <span class="material-icons-round">
                dashboard
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="{{route('absen.index')}}">Dashboard</a>
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
@if (auth()->user()->level=="siswa")
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
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="">
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
@endif
    <li class="nav-item mt-4 ms-3 ">
        <p class="text-uppercase opacity-50 fw-bolder text-white" disabled>
            <b>Account Page</b>
        </p>
    </li>
    <li class="nav-item">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                person
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="/profile">
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
<div class="container-fluid px-4 ">
    <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">Today</button>
        </li>
        <li class="nav-item ms-3" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">History</button>
        </li>
    </ul>
    <div class="tab-content mt-4" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <!-- tables absensi -->
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
                            <th class="">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($absen as $row)
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-3">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm">{{$row->users->name}}</h6>
                                        <p class="text-secondary mb-0"> {{$row->users->email}}</p>
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
                                <span class="text-secondary">{{$row->tanggal}}</span>
                            </td>
                            <td class="align-middle text-center">
                                <a href="" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

        </div>
    </div>
</div>
@endsection
@endif