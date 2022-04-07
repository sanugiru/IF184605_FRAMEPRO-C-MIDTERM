@extends('layouts.main')

@section('container')
<div style="display: flex;">
    <div class="bg-kiri" style="flex: 60%;padding: 10px;height: 745px;"></div>
    <div style="flex: 40%;padding: 10px;height: 100%;">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="/login" method="post">
            @csrf
            <div class="form-group" style="padding-left: 100px; padding-right: 100px; padding-top: 30%;">

                <h4>Login Laundry.in</h4><br>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <br>
                <div style="padding-left: 40%;">
                    <button type="submit" class="btn btn-dark">Login</button>
                </div>
                <br><br>
                <div class="reg" style="text-align: center;">
                    Don't have an account? <br>
                    <a href="/register" style="text-decoration:none;">Register Here</a>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection