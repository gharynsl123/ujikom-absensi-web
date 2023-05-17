<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js"></script>
</head>

<body style="background-color:#F4FAFF;">
    <!-- NavBar Constant -->
    <div id="app">
        <nav class="navbar navbar-main navbar-expand-lg m-2 px-4 mb-5  rounded shadow bg-body-tertiary">
            <div class="container-fluid collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <a class="navbar-brand" href="#">Hidden brand</a>
                <ul class="nav">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-black text-decoration-none"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-black text-decoration-none"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <div class="nav-link border text-black border-dark rounded-pill ">
                            <i class="fa fa-user mx-2"></i>
                            <a id="navbarDropdown" href="#" class="dropdown-toggle text-black text-decoration-none"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <main>
            @yield('auth')
        </main>
    </div>

    <!-- content -->
    <div class="container">
        <div class="rounded rounded-3 shadow-lg bg-white p-3">
            <p class="fs-4 fw-bold text-secondary text-capitalize mb-5">edit your user</p>

            <form action="{{route('user.update', $user->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="justify-content-center d-flex">
                            <img src="{{ asset('storage/icon-web.png') }}" 
                                class="rounded rounded-3 img-thumbnail mb-3" width="250px" id="imagePreview">

                        </div>
                        <div class="mb-3">
                            <input require type="file" class="form-control" id="image-input" name="image"
                                value="{{$user->image}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input require type="text" class="form-control" id="name" name="name"
                                value="{{$user->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input require type="email" class="form-control" id="email" name="email"
                                value="{{$user->email}}">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input require type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <div class="input-group">
                                    <label class="input-group-text" for="inputGroupSelect01">level</label>
                                    <select class="form-select" require id="inputGroupSelect01" name="level">
                                        <option value="{{$user->level}}">{{$user->level}}</option>
                                        <option value="guru">guru</option>
                                        <option value="kaprodi">kaprodi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-group">
                                    <label class="input-group-text" for="inputGroupSelect01">Mapel</label>
                                    <select class="form-select" require id="inputGroupSelect01" name=" ">
                                        <option value="0">Choose...</option>
                                        @foreach ($mapel as $item)
                                        <option value="{{$item->id}}">{{$item->nama_mapel}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mt-2 form-group col-md-6">
                        <button type="submit" class="btn btn-success col-md-4 text-uppercase">edit</button>
                    </div>
                </div>
            </form>
        </div>

        <form action="{{route('user.destroy',$user->id)}}" class="px-1 py-4" method="post">
            @csrf
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger px-5"
                onclick="return confirm('Apakah anda akan menghapus {{$user->name}} ?');">Hapus</button>
            <a href="{{url('/user')}}" class="btn btn-warning px-4">Cancel</a>
        </form>
    </div>
</body>

<script>
    document.getElementById('image-input').addEventListener('change', (ev) => {
        let reader = new FileReader()
        reader.readAsDataURL(ev.target.files[0])
        reader.onload = () => {
            document.getElementById('imagePreview').setAttribute('src', reader.result)
        }
    })Ï
</script>
</html>