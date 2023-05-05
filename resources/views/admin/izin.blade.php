@extends('admin.layouts.mainview')

@section('sidebar')
<ul class="nav nav-pills d-flex row">
    @if (auth()->user()->level=="admin")
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
    @endif
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
        <div class="nav-link active d-flex fw-light text-white align-item-center">
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
<div class="col-md-8 m-auto my-5">
        <div class="card h-auto">
            <div class="card-header px-3">
                <h6 class="mb-0 p-3">Buat Perizinan</h6>
            </div>
            <div class="card-body">
                <form action="{{route('izin.store')}}" method="post">
                    {{method_field('POST')}}
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-2 mb-2">
                            <label class="form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-md-10 mb-2">
                            <input type="text" required class="form-control" name="nama_lengkap">
                        </div>
                        <div class="col-2 mb-2">
                            <label class="form-label">Kelas</label>
                        </div>
                        <div class="col-md-10 mb-2">
                            <input type="text" required class="form-control" name="kelas">
                        </div>
                        <div class="col-md-2 mb-2">
                            <label class="label-form">Keterangan</label>
                        </div>
                        <div class="col-md-10 mb-2">
                            <select type="text" required class="form-control" name="keterangan">
                                <option value="">Pilih Opsi</option>
                                <option value="Izin">Izin</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Izin">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-10"> 
                            <input class="form-control" required type="file" id="formFile" style="height: 100px;" name="bukti_foto">
                            <div id="passwordHelpBlock" class="form-text">
                                Kirim bukti keterangan
                            </div>
                        </div>

                        <div class="d-flex justify-content-end form-group ">
                            <button type="submit" class="btn btn-success">Submit</button>
                           
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection