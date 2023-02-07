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
                <a href="/home" class="nav-link px-2 fs-5 link-dark fw-bolder">Home</a>
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

<div class="container mt-2">
    <div class="row">
        @foreach ($item as $i)
        <div class="col-3 d-flex justify-content-center mb-3 mt-2">
            <div class="card">
                <img src="{{ Storage::url($i->image) }}" alt="" class="card-img-top mt-3 ms-3 me-3" style="height:12rem; width:12rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $i->name }}</h5>
                    <a href="/home/{{ $i->id }}" class="btn btn-warning mt-auto">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-end">
        {{ $item->links() }}
    </div>
</div>
@endsection
