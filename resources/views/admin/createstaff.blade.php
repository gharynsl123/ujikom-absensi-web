@extends('admin.layouts.tamplate')

@section('sidebar')
<div class="collapse navbar-collapse h-auto ms-md-auto w-auto mt-5" id="sidenav-collapse-main">
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
            <a class="nav-link text-white active bg-info" href="{{route('user.create')}}">
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
            <a class="nav-link text-white " href="/absen">
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
<div class="col-md-7 mb-3">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Make User Staff</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-4 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" mt-4 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">lavel</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" mt-4 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class=" mt-4 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">class</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class=" mt-4 d-flex mb-5 align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">password</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-5 mb-3">
    <div class="card h-auto mb-4">
        <div class="card-header pb-0 px-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mb-0">Make Class</h6>
                </div>
            </div>
        </div>
        <div class="card-body pt-4 p-3">
            <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Grade / Major</h6>
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <input class="form-control form-control-lg border border-info" type="text" placeholder="Tambah Data"
                    value="" name="class">
                <button type="submit" class="btn btn-success mt-3 col-md-4">Buat</button>
            </form>
        </div>
    </div>
    <div class="card h-auto mb-4">
        <div class="card-body mt-3 pt-4 p-3 table">
            <table class="table">
                <thead>
                    <tr>
                        <td class="h6">Nama</td>
                        <td class="h6">Action</td>
                    </tr>
                </thead>
                @foreach($kelas as $row)
                <tbody>
                    <tr>
                        <td>{{$row->class}}</td>
                        <td>
                            <form action="{{route('user.destroy', $row->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-link text-danger text-gradient mb-0 p-0 " data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Delete"><i
                                        class="material-icons text-sm">delete</i></button></td>
                            </form>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
