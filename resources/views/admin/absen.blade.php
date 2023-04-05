@extends('admin.layouts.mainview')

@section('sidebar')
<ul class="nav nav-pills d-flex row">
    <li class="nav-item my-3">
        <div class="nav-link fw-light text-white d-flex align-item-center">
            <span class="material-icons-round">
                dashboard
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="#">Dashboard</a>
        </div>
    </li>
    <li class="nav-item">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                table_view
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="user.html">User</a>
        </div>
    </li>
    <li class="nav-item my-3">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                assignment_ind
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="#">Create
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
        <div class="nav-link d-flex active fw-light text-white align-item-center">
            <span class="material-icons-round">
                pending_actions
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="#">
                Absen</a>
        </div>
    </li>
    <li class="nav-item">
        <div class="nav-link d-flex fw-light text-white align-item-center">
            <span class="material-icons-round">
                approval
            </span>
            <a aria-current="page" class=" ms-2 fw-light text-white text-decoration-none" href="#">
                Ajukan Izin</a>
        </div>
    </li>
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
<div class="col-md-12 mb-lg-0 mb-4">
    <div class="card bg-info ">
        <div class="card-header bg-info pb-0 p-3">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="mb-0 text-white">Notification</h6>
                </div>
                <div class="col-6 text-end">
                    <a class="btn bg-warning text-white mb-0" href="/izin"><i
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
                        <h5 class="mt-4 mb-4 pb-2">
                            4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852
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
                        <h5 class="mt-4 mb-4 pb-2">
                            4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852
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