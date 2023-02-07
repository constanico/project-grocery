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
            <h1 class="fw-light fs-4">Register</h1>
        </div>
    </div>
</section>

<div class="container w-100 d-flex justify-content-center">
    <form action="/postregister" method="POST">
        @csrf
        <div class="d-flex flex-row">
            <div class="left me-3">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-4 pb-1">
                    <label for="gender" class="form-label me-2">Gender</label>
                    <div class="d-flex flex-row">
                        <div class="form-check me-3">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Male
                            <label class="form-check-label" for="radio1"></label>
                          </div>
                          <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Female
                            <label class="form-check-label" for="radio2"></label>
                          </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="right">
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label me-2">Display Picture</label>
                    <input type="file" class="form-control" id="picture">
                </div>
                <div class="mb-3">
                    <label for="confirmpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
                </div>
            </div>
        </div>
        <div class="d-block text-center">
            <button type="submit" class="w-50 btn btn-primary">Submit</button>
        </div>
        <small class="d-block text-center mt-3">
            Already Registered? <a href="/login">Log In Here</a>
        </small>
    </form>
</div>
@endsection
