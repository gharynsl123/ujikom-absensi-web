@extends('admin.layouts.tamplate')

@section('sidebar')

<div class="collapse navbar-collapse ms-md-auto w-auto mt-5" id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" href="/home">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('user.index')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1">Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('user.create')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">assignment_ind</i>
                </div>
                <span class="nav-link-text ms-1">Create User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="/admin/monthly">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">summarize</i>
                </div>
                <span class="nav-link-text ms-1">Monthly Report</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Absensi Siswa
            </h6>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white active bg-info" href="/absen">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">pending_actions</i>
                </div>
                <span class="nav-link-text ms-1">Absen</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages
            </h6>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="/admin/profile">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person</i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('content')
<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card bg-info ">
        <div class="card-header bg-info pb-0 p-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0 text-white">Notification</h6>
                </div>
                <div class="col-6 text-end">
                    <a class="btn bg-warning text-white mb-0" href="javascript:;"><i
                            class="material-icons text-white text-sm">add</i>&nbsp;&nbsp;Ajukan perizinan</a>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <!-- <div class="row">
                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                        <img class="w-10 me-3 mb-0" src="../assets/img/logos/mastercard.png" alt="logo">
                        <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                        <i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card">edit</i>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                        <img class="w-10 me-3 mb-0" src="../assets/img/logos/visa.png" alt="logo">
                        <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                        <i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card">edit</i>
                      </div>
                    </div>
                  </div> -->

            <div class="row">
                <h5 class="text-white">Kamu Belum Absen Hari ini</h5>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-md-6  mb-xl-0 mt-4">
        <div class="card bg-transparent shadow-xl">
            <div class="overflow-hidden position-relative  border-radius-xl">
                <div class="card-body position-relative z-index-1 p-3">
                    <h5 class="mt-4 mb-4 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852
                    </h5>
                    <div class="d-flex">
                        <div class="d-flex">
                            <div class="me-4">
                                <p class="text-sm opacity-8 mb-0">Name</p>
                                <h6 class=" mb-0">diana putri salsabila</h6>
                            </div>
                            <div>
                                <p class="text-sm opacity-8 mb-0">Waktu</p>
                                <h6 class=" mb-0">12:07 10/01/2023</h6>
                            </div>
                        </div>
                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                            masuk
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6  mb-xl-0 mt-4">
        <div class="card bg-transparent shadow-xl">
            <div class="overflow-hidden position-relative  border-radius-xl">
                <div class="card-body position-relative z-index-1 p-3">
                    <h5 class="mt-4 mb-4 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852
                    </h5>
                    <div class="d-flex">
                        <div class="d-flex">
                            <div class="me-4">
                                <p class="text-sm opacity-8 mb-0">Name</p>
                                <h6 class=" mb-0">diana putri salsabila</h6>
                            </div>
                            <div>
                                <p class="text-sm opacity-8 mb-0">Waktu</p>
                                <h6 class=" mb-0">12:07 10/01/2023</h6>
                            </div>
                        </div>
                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                            masuk
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection