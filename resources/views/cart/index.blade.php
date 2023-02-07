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
                <a href="/cart" class="nav-link px-2 fs-5 link-dark fw-bolder">Cart</a>
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

<div class="album py-1 bg-light mt-2">
    <div class="container">
        <div class="row">
            <?php $totalPrice = 0; ?>
            @foreach ($cart as $cart)
            <div class="col-3 d-flex justify-content-center mb-2 mt-2">
                <div class="card" style="width: 14rem; height: auto;">
                    <img src="{{ Storage::url($cart->image) }}" class="card-img-top mt-3 ms-3 me-3" alt="..." style="height:12rem; width:12rem;">
                    <div class="card-body">
                        <p class="card-text fs-5 fw-bold m-0">{{ $cart->itemName }}</p>
                        <p class="card-text fs-6 m-0">Rp {{ $cart->price }}</p>
                        <a href="/delete/{{ $cart->id }}" type="button" class="btn btn-md btn-danger mt-2">Remove from Cart</a>
                    </div>
                </div>
            </div>
            <?php $totalPrice = $totalPrice + $cart->price ?>
            @endforeach
        </div>
    </div>
</div>

<div class="d-flex flex-row justify-content-end me-5 mb-5">
    <div class="p-2">
        <p class="card-text fs-5 fw-bold">Total Price: Rp {{ $totalPrice }}</p>
    </div>
    <div class="p-2">
        <form action="/checkout" method="POST">
            @csrf
            <button type="submit" class="btn btn-md btn-primary">Check Out</button>
        </form>
    </div>
</div>
@endsection
