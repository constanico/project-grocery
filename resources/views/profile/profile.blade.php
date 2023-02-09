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
                <a href="/profile" class="nav-link px-2 fs-5 link-dark fw-bolder">Profile</a>
            </div>
            @if (auth()->user()->role == "admin")
            <div class="col">
                <a href="/maintenance" class="nav-link px-2 fs-5 link-dark">Account Maintenance</a>
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
            <img src="{{ Storage::url($user->picture) }}" alt="..." class="card-img-top m-3" style="height:18rem; width:auto;">
        </div>
    </div>
    <div class="right">
        <form action="/save" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
            <div class="d-flex flex-row">
                <div class="left me-3">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{ old('firstname') }}">
                        @error('firstname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4 pb-1">
                        <label for="gender" class="form-label me-2">Gender</label>
                        <div class="d-flex flex-row">
                            <input type="radio" class="form-check-input me-2 @error('gender') is-invalid @enderror" id="radio1" name="gender" value="male">
                            <label class="form-check-label me-3" for="male">Male</label>
                            <input type="radio" class="form-check-input me-2 @error('gender') is-invalid @enderror" id="radio2" name="gender" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        @error('gender')
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
                <div class="right">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{ old('lastname') }}">
                        @error('lastname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="">
                        <div>
                            <label for="role" class="form-label">Role</label>
                        </div>
                        <p class="btn btn-secondary" disabled>{{ $user->role }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label me-2">Display Picture</label>
                        <input type="file" name="picture"class="form-control @error('picture') is-invalid @enderror" id="picture">
                        @error('picture')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                </div>
            </div>
            <div class="d-block text-center">
                <button type="submit" class="w-50 btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
