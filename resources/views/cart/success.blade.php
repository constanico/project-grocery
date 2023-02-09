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
</div>

<div class="container d-flex flex-wrap align-items-center justify-content-center text-center p-3 mx-auto flex-column text-light mh-100" style="height: 100vh;">
    <main class="px-3">
        <h1 class="text-black">Success</h1>
        <p class="lead text-black">We Will Contact You 1x24 Hours</p>
        <p class="lead">
            <a href="/home/en">
                <button type="button" class="btn btn-primary">Click Here to Home</button>
            </a>
        </p>
    </main>
</div>
@endsection
