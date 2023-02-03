@extends('master')

@section('css')
    <style>
        #intro {
            background-image: url('{{ asset('images/cover.jpg') }}');
            height: 100%;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid bg-warning">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-around py-3">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 link-dark fs-3 fw-bold">Amazing E-Grocery</a></li>
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

<div id="intro">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);">
        <div class="container d-flex flex-wrap align-items-center justify-content-center text-center p-3 mx-auto flex-column text-light mh-100" style="height: 100vh;">
            <main class="px-3">
            <h1>Amazing E-Grocery</h1>
            <p class="lead">Find and Buy Your Grocery Here!</p>
            <p class="lead">
                <a href="/register">
                    <button type="button" class="btn btn-primary">Register</button>
                </a>
            </p>
            </main>
        </div>
    </div>
</div>
@endsection
