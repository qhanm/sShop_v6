@extends('backend.auth.master')

@section('title')
    QHN - Login
@endsection

@section('content')
    <form action="" method="post">
        @csrf
        <div class="card-body">

            <!-- Header -->
            <h3 class="font-weight-500 my-2 py-1 text-center">Log in</h3>

            <!-- Body -->
            <div class="md-form">
                <i class="fas fa-user prefix white-text"></i>
                <input
                    type="text"
                    id="username"
                    name="username"
                    class="form-control" autocomplete="off"
                    placeholder="Username"
                    value="{{ old('username') }}"
                >
                @error('username')
                    <div class="invalid-feedback qhn-invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="md-form">
                <i class="fas fa-lock prefix white-text"></i>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control"
                    placeholder="Password"
                >
                @error('password')
                    <div class="invalid-feedback qhn-invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="md-form">
                <input class="form-check-input filled-in" type="checkbox" id="remember" name="remember" {{ (old('remember') ? 'checked' : '') }}/>
                <label class="form-check-label" for="remember">Remember me</label>
            </div>

            <div class="text-center">
                <button class="btn purple-gradient btn-lg waves-effect waves-light">Sign up</button>
                <hr class="mt-4">
                <div class="inline-ul text-center d-flex justify-content-center">
                    <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                    <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text"> </i></a>
                    <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text"> </i></a>
                </div>
            </div>

        </div>
    </form>
@endsection
