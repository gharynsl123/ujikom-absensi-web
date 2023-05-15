@section('sidebar')
<ul class="nav nav-pills d-flex row">
    @if (auth()->user()->level=="admin")
    <li class="nav-item my-3">
        <div class="nav-link fw-light text-white d-flex align-item-center">
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
    @endif
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
<div class="mx-4 mt-4 my-0">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <div>
            Hei Kamu Belum Absen Hari ini
        </div>
    </div>
</div>
<div class="container-fuild m-0 d-flex justify-content-center row">
    <div class="mt-4" style="width: 35rem;">
        <div class="rounded-3 bg-white shadow-lg">
            <div class="p-3">
                <p></p>
                <div class="mb-4">
                    <p class="mb-0 text-uppercase fw-bold">Name</p>
                    <h6 class="text-capitalize text-secondary">diana putri salsabila</h6>
                </div>
                <div>
                    <p class="mb-0 text-uppercase fw-bold">Waktu</p>
                    <h6 class="text-secondary">12:07 10/01/2023</h6>
                </div>
            </div>
            <div class="d-flex align-item-end justify-content-end">
                <p class="m-2 badge text-bg-success">masuk</p>
            </div>
        </div>
    </div>
    <div class="mt-4" style="width: 35rem;">
        <div class="rounded-3 bg-white shadow-lg">
            <div class="p-3">
                <p></p>
                <div class="mb-4">
                    <p class="mb-0 text-uppercase fw-bold">Name</p>
                    <h6 class="text-capitalize text-secondary">diana putri salsabila</h6>
                </div>
                <div>
                    <p class="mb-0 text-uppercase fw-bold">Waktu</p>
                    <h6 class="text-secondary">12:07 10/01/2023</h6>
                </div>
            </div>
            <div class="d-flex align-item-end justify-content-end">
                <p class="m-2 badge text-bg-danger">Keluar</p>
            </div>
        </div>
    </div>
</div>
@endsection