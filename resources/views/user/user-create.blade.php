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
        <div class="nav-link active d-flex fw-light text-white align-item-center">
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
<div class="container-fluid m-0">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="rounded-3 bg-white shadow">
                <div class="pb-0 m-0 px-3">
                    <div class="badge mt-3 bg-dark p-2 text-wrap" style="width: 8rem;">
                        Make Users
                    </div>
                </div>
                <div class="mt-1 px-3 pb-3">
                    <form action="{{route('user.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="input-group my-4">
                                <span class="input-group-text" id="basic-addon1">Nama Lengkap</span>
                                <input type="text" class="form-control" require name="name" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Alamat E-mail</span>
                                <input type="email" class="form-control" require name="email" placeholder="mail"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="col-md-12 my-4">
                                <div class="input-group">
                                    <label class="input-group-text" for="inputGroupSelect01">Lavel</label>
                                    <select name="level" require class="form-select" id="inputGroupSelect01">
                                        <option>Choose...</option>
                                        <option value="kaprodi">Kaprodi</option>
                                        <option value="siswa">Siswa</option>
                                        <option value="guru">Guru</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mb-5">
                                <div class="input-group ">
                                    <span class="input-group-text" id="basic-addon1">password</span>
                                    <input type="password" class="form-control" require name="password"
                                        placeholder="••••" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="form-control btn btn-success">Tambah Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="rounded-3 bg-white shadow">
                <div class="pb-0 m-0 px-3">
                    <div class="badge mt-3 bg-dark p-2 text-wrap" style="width: 7rem;">
                        Make Class
                    </div>
                </div>
                <div class="mt-1 px-3 pb-3">
                    <form action="{{route('kelas.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="input-group my-4">
                                <span class="input-group-text" id="basic-addon1">Buat Kelas</span>
                                <input name="nama_kelas" type="text" class="form-control "
                                    placeholder="11 muadz bin jabbal" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-4">
                                    <label class="input-group-text" for="inputGroupSelect01">Guru Pendamping</label>
                                    <select name="id_user" require class="form-select" id="inputGroupSelect01">
                                        <option>Choose...</option>
                                        @foreach($guru as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="input-group mb-4">
                                    <label class="input-group-text" for="inputGroupSelect01">Jurusan</label>
                                    <select name="id_jurusan" require class="form-select" id="inputGroupSelect01">
                                        <option>Choose...</option>
                                        @foreach($jurusan as $row)
                                        <option value="{{$row->id}}">{{$row->nama_jurusan}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="form-control btn btn-success">Tambah Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="rounded-3 mt-2 bg-white shadow">
                <div class="pb-0 m-0 px-3">
                    <div class="badge mt-3 bg-dark p-2 text-wrap" style="width: 7rem;">
                        Make Jurusan
                    </div>
                </div>
                <div class="mt-1 px-3 pb-3">
                    <form action="{{route('jurusan.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="input-group my-4">
                                <span class="input-group-text" id="basic-addon1">Jurusan</span>
                                <input name="nama_jurusan" type="text" class="form-control "
                                    placeholder="RPL" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="form-control btn btn-success">Tambah Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>
    <div class="row px-2 mb-5">
        <div class="col-md-12 rounded-3 bg-white h-auto shadow">
            <div class="table-responsive">

                <table class="table table-hover m-0">
                    <thead>
                        <tr>
                            <td class="h6 p-3">Jurusan</td>
                            <td class="h6 p-3"></td>
                        </tr>
                    </thead>
                    @foreach($kelas as $row)
                    <tbody>
                        <tr>
                            <td class="p-3">{{$row->jurusan->nama_jurusan}}</td>
                            <td class="p-3">
                                <form action="{{route('jurusan.destroy', $row->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-link text-danger text-gradient mb-0 p-0"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Tooltip on top"><span
                                            class="material-symbols-rounded">delete</span></button>
                            </td>
                            </form>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
    <div class="row px-2">
        <div class="col-md-12 rounded-3 bg-white h-auto shadow">
            <div class="table-responsive">

                <table class="table table-hover m-0">
                    <thead>
                        <tr>
                            <td class="h6 p-3">Nama</td>
                            <td class="h6 p-3">Jurusan</td>
                            <td class="h6 p-3">Guru Pendamping</td>
                            <td class="h6 p-3"></td>
                        </tr>
                    </thead>
                    @foreach($kelas as $row)
                    <tbody>
                        <tr>
                            <td class="p-3">{{$row->nama_kelas}}</td>
                            <td class="p-3">{{$row->jurusan->nama_jurusan}}</td>
                            <td class="p-3">{{$row->users->name}}</td>
                            <td class="p-3">
                                <form action="{{route('kelas.destroy', $row->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-link text-danger text-gradient mb-0 p-0"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Tooltip on top"><span
                                            class="material-symbols-rounded">delete</span></button>
                            </td>
                            </form>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
</div>
</div>
@endsection