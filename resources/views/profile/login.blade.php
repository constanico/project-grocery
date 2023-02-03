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
            <li><a href="/" class="nav-link px-2 link-dark fs-3 fw-bold">Amazing E-Grocery</a></li>
        </ul>
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
    <form action="/" method="POST">
        <div class="d-flex flex-row">
            <div class="left me-3">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
        </div>
        <div class="d-block text-center">
            <button type="submit" class="w-50 btn btn-warning">Submit</button>
        </div>
        <small class="d-block text-center mt-3">
            Not Registered Yet? <a href="/register">Register Now</a>
        </small>
    </form>
</div>
@endsection