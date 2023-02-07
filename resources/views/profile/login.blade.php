@extends('master')

@section('css')
    <style>
        .container {
        display: flex;
        align-items: center;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid bg-warning">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-around py-3">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-dark fs-3 fw-bold">Amazing E-Grocery</a></li>
        </ul>

        <div class="col-md-2 text-end">
            <a href="/register">
                <button type="button" class="btn btn-primary me-2">Register</button>
            </a>
            <a href="/login">
                <button type="button" class="btn btn-primary">Log In</button>
            </a>
        </div>
    </header>
</div>

<section class="p-4 text-center">
    <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light fs-4">Login</h1>
        </div>
    </div>
</section>

<div class="container w-100 d-flex justify-content-center">
    <form action="/postlogin" method="POST">
        @csrf
        <div class="d-flex flex-row">
            <div class="left me-3">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        @if (session()->has('error'))
            <p class="text-danger">{{ session('error') }}</p>
        @endif

        <div class="d-block text-center">
            <button type="submit" class="w-50 btn btn-warning">Submit</button>
        </div>
        <small class="d-block text-center mt-3">
            Not Registered Yet? <a href="/register">Register Now</a>
        </small>
    </form>
</div>
@endsection
