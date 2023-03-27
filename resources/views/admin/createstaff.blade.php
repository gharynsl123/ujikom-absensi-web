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
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">Oliver Liam</h6>
                        <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Viking
                                Burrito</span></span>
                        <span class="mb-2 text-xs">Email Address: <span
                                class="text-dark ms-sm-2 font-weight-bold">oliver@burrito.com</span></span>
                        <span class="text-xs">VAT Number: <span
                                class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                    </div>
                    <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                class="material-icons text-sm me-2">delete</i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                class="material-icons text-sm me-2">edit</i>Edit</a>
                    </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">Lucas Harper</h6>
                        <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Stone
                                Tech Zone</span></span>
                        <span class="mb-2 text-xs">Email Address: <span
                                class="text-dark ms-sm-2 font-weight-bold">lucas@stone-tech.com</span></span>
                        <span class="text-xs">VAT Number: <span
                                class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                    </div>
                    <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                class="material-icons text-sm me-2">delete</i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                class="material-icons text-sm me-2">edit</i>Edit</a>
                    </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">Ethan James</h6>
                        <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Fiber
                                Notion</span></span>
                        <span class="mb-2 text-xs">Email Address: <span
                                class="text-dark ms-sm-2 font-weight-bold">ethan@fiber.com</span></span>
                        <span class="text-xs">VAT Number: <span
                                class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                    </div>
                    <div class="ms-auto text-end">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i
                                class="material-icons text-sm me-2">delete</i>Delete</a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                class="material-icons text-sm me-2">edit</i>Edit</a>
                    </div>
                </li>
            </ul>
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
