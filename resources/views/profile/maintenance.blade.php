@extends('master')

@section('content')
<div class="container-fluid bg-warning">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-around py-3">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/home" class="nav-link px-2 link-dark fs-3 fw-bold">Amazing E-Grocery</a></li>
        </ul>

        <div class="col-md-2 text-end">
            <a href="/logout">
                <button type="button" class="btn btn-primary">Log Out</button>
            </a>
        </div>
    </header>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <a href="/home" class="nav-link px-2 fs-5 link-dark">Home</a>
            </div>
            <div class="col">
                <a href="/cart" class="nav-link px-2 fs-5 link-dark">Cart</a>
            </div>
            <div class="col">
                <a href="/profile" class="nav-link px-2 fs-5 link-dark">Profile</a>
            </div>
            @if (auth()->user()->role == "admin")
            <div class="col">
                <a href="/maintenance" class="nav-link px-2 fs-5 link-dark fw-bolder">Account Maintenance</a>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="container text-center mt-5">
    <div class="row">
        <div class="col">
            <p>Account</p>
            @foreach ($user as $u)
                <p>{{ $u->name }}</p>
                <p>{{ $u->role }}</p>
            @endforeach
        </div>
        <div class="col">
            <p>Action</p>
        </div>
    </div>
</div>
@endsection
