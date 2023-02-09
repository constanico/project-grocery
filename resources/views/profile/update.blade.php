@extends('master')

@section('content')
<div class="container-fluid bg-warning">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-around py-3">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/home/en" class="nav-link px-2 link-dark fs-3 fw-bold">Amazing E-Grocery</a></li>
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
                <a href="/home/en" class="nav-link px-2 fs-5 link-dark">Home</a>
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

<section class="p-4 text-center">
    <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light fs-4">Profile</h1>
        </div>
    </div>
</section>

<div class="container w-100 d-flex justify-content-evenly">
    <div class="left">
        <div class="card">
            <img src="{{ Storage::url($user->picture) }}" alt="..." class="card-img-top m-3" style="height:12rem; width:auto;">
        </div>
        <p class="lead mt-2">{{ $user->firstName }} {{ $user->lastName }} - {{ $user->role }}</p>
    </div>
    <div class="right">
        <form action="/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
            <div class="d-flex flex-row">
                <div class="mb-3">
                    <label for="role" class="form-label">Update Role</label>
                    <select class="form-select @error('role') is-invalid @enderror" name="role" id="role">
                        <option value="">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="d-block">
                <button type="submit" class="w-50 btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
