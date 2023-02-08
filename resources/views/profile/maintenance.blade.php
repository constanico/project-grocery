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
    <div class="row" style="background-color: #ffc107">
        <div class="col">
            <p class="fs-4 mt-2">Account</p>
            @foreach ($user as $u)
                <p class="lead">{{ $u->firstName }} {{ $u->lastName }} - {{ $u->role }}</p>
            @endforeach
        </div>
        <div class="col">
            <p class="fs-4 mt-2">Action</p>
            @foreach ($user as $u)
            <div class="row align-items-start mb-2">
                <div class="col">
                    <a class="btn btn-primary" href="/update/{{ $u->id }}" role="button">Update Role</a>
                </div>
                <div class="col">
                    <a href="/delete/{{ $u->id }}">
                        <a class="btn btn-danger" href="/delete" role="button">Delete</a>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
