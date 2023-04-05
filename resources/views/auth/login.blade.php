@extends('layouts.app')

@section('auth')
<div class="d-flex container justify-content-center mt-5">
    <div class="card col-md-8 p-4">
        <form action="{{ route('login')}}" method="post">
            @csrf
            <p class="text-center fs-4 fw-bolder m-0">Are you our Staff</p>
            <p class="text-secondary text-center">If your a Student please <span><a href="{{ route('register') }}"
                        class="text-decoration-none text-primary">Resgiter</a></span> First</p>

            <p class="fw-light m-0 mt-4 text-secondary">Email</p>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">
                    <span class="material-icons-round ">
                        email
                    </span>
                </span>
                <input required type="email" name="email" id="email" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <p class="fw-light m-0  text-secondary">Password</p>
            <div class="input-group mb-2">
                <span class="input-group-text" id="inputGroup-sizing-default">
                    <span class="material-icons-round ">
                        password
                    </span>
                </span>
                <input id="password" name="password" autocomplete="current-password" required type="password"
                    class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="submit" class="btn btn-success mt-3">Login</button>

        </form>
    </div>
</div>
@endsection