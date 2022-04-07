@extends('layouts.main')

@section('container')
<div style="align-items: center; padding-left: 500px; padding-right: 500px; padding-top: 50px; padding-bottom: 30px;">
    <h3>Sign Up Laundry.in</h3>
    <form action="/register" method="post">
        @csrf
        <fieldset>
            <div class="form-group">
                <label for="email" class="form-label mt-4">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="password" class="form-label mt-4">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                <small id="emailHelp" class="form-text text-muted">At least 8 characters.</small>
            </div>

            <div class="form-group">
                <label for="name" class="form-label mt-4">Name</label>
                <input type="text" name="name"  class="form-control" id="name" placeholder="Enter your name">
            </div>
            
            <div class="form-group">
                <label for="phone_number" class="form-label mt-4">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Enter your phone number">
            </div>

            <div class="form-group">
                <label for="address" class="form-label mt-4">Address</label>
                <textarea class="form-control" name="address"id="address" rows="3" placeholder="Enter your address"></textarea>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Sign Up</button><br><br>
            <div class="reg" style="text-align: center;">
                Already have an account?  
                <a href="/login" style="text-decoration:none;">Login</a>
            </div>
        </fieldset>
    </form>
</div>
@endsection