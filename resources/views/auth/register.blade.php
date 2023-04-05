@extends('layouts.app')

@section('auth')
<div class="d-flex container justify-content-center mt-5">
    <div class="card col-md-8 p-4">
        <p class="text-center fs-4 fw-bolder m-0">Make Your Account</p>
        <p class="fw-light m-0 mt-4 text-secondary">Your Name</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">
                    <span class="material-icons-round ">
                        person
                    </span>
                </span>
                <input name="name" required id="name" type="text" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <p class="fw-light m-0 text-secondary">Email</p>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">
                    <span class="material-icons-round ">
                        email
                    </span>
                </span>
                <input required id="email" type="email" class="form-control" aria-label="Sizing example input"
                    name="email" aria-describedby="inputGroup-sizing-default">
            </div>

            <p class="fw-light m-0  text-secondary">Password</p>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">
                    <span class="material-icons-round ">
                        password
                    </span>
                </span>
                <input name="password" id="password" type="password" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required
                    autocomplete="new-password" required>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <p class="fw-light m-0  text-secondary">Confirm Password</p>
            <div class="input-group mb-2">
                <span class="input-group-text" id="inputGroup-sizing-default">
                    <span class="material-icons-round ">
                        password
                    </span>
                </span>
                <input id="password-confirm" type="password" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="password_confirmation" required autocomplete="new-password" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Register</button>

            <p class="mt-4">Are you a staff. please <span><a href="{{ route('login') }}" class="text-decoration-none text-primary">login</a></span></p>

        </form>

    </div>
</div>
@endsection