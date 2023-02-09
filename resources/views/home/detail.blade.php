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
                <a href="/home/en" class="nav-link px-2 fs-5 link-dark fw-bolder">Home</a>
            </div>
            <div class="col">
                <a href="/cart" class="nav-link px-2 fs-5 link-dark">Cart</a>
            </div>
            <div class="col">
                <a href="/profile" class="nav-link px-2 fs-5 link-dark">Profile</a>
            </div>
            @if (auth()->user()->role == "admin")
            <div class="col">
                <a href="/maintenance" class="nav-link px-2 fs-5 link-dark">Account Maintenance</a>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="card my-5 mx-auto" style="max-width: 850px;">
    <div class="row g-0">
        <div class="col-md-4 p-4">
        <div class="card shadow-sm" style="width: auto; height: auto;">
            <img src="{{ Storage::url($item->image) }}" class="img-fluid rounded-start" alt="..." style="width:15rem; height: 15rem;">
        </div>
        </div>
        <div class="col-md-8 py-4 pe-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fs-2 fw-bold m-0">{{ $item->name }}</h5>
                    <p class="card-text fs-4">Rp {{ $item->price }}</p>
                    <p class="card-text fw-bold m-0">Product Detail</p>
                    <p class="card-text">{{ $item->desc }}</p>
                    <form action="/addToCart/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row py-2">
                                <div class="col p-0">
                                    <button type="submit" class="btn btn-md btn-success">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="container">
                        <div class="row py-2">
                            <div class="col-2 p-0">
                                <a href="/home">
                                    <button type="button" class="btn btn-md btn-danger">Back</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
