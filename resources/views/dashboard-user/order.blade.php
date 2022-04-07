@extends('dashboard-user.layouts.main')

@section('container')
<div>
  <div style="align-items: center; padding-left: 500px; padding-right: 500px; padding-top: 40px; padding-bottom: 30px;">
    <h3>Form Order</h3>
    <form method="post" action="/dashboard-user/order">
        @csrf
      <fieldset>
        <div class="form-group">
          <label for="name" class="form-label mt-4">Full Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="phone_number" class="form-label mt-4">Phone Number</label>
          <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Enter your phone number">
        </div>
        <div class="form-group">
          <label for="service" class="form-label mt-4">Choose a Service</label>
          <select class="form-select" name="service_id" id="service">
            @foreach ($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="date_pickup" class="form-label mt-4">Pick Up Date</label>
          <input type="datetime-local" name="date_pickup" class="form-control" id="date_pickup">
        </div>
        <div class="form-group">
          <label for="address" class="form-label mt-4">Pick Up Address</label>
          <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter your address"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
      </fieldset>
    </form>
  </div>
@endsection