@extends('dashboard-user.layouts.main')

@section('container')
<div style="text-align: center; margin-top: 30px;" class="mt-5">
    <h3>Menu</h3>
  </div>
  <div style="display: flex; padding-top: 20px; padding-left: 50px; padding-right: 50px;">
    <div style="flex: 25%; text-align: center; padding: 50px;">
      <div class="list-group">
        <a href="/dashboard-user/order" class="list-group-item list-group-item-action flex-column align-items-start">
          <div style="padding: 30px;">
            <img src="../images/laundry.png" style="height: 80px;"><br><br>
            <h5>Order Here</h5>
          </div>
        </a>
      </div>
    </div>
    <div style="flex: 25%; text-align: center; padding: 50px;">
      <div class="list-group">
        <a href="/dashboard-user/service" class="list-group-item list-group-item-action flex-column align-items-start">
          <div style="padding: 30px;">
            <img src="../images/price-tag.png" style="height: 80px;"><br><br>
            <h5>Service</h5>
          </div>
        </a>
      </div>
    </div>
    <div style="flex: 25%; text-align: center; padding: 50px;">
      <div class="list-group">
        <a href="/dashboard-user/contacts" class="list-group-item list-group-item-action flex-column align-items-start">
          <div style="padding: 30px;">
            <img src="../images/contact-book.png" style="height: 80px;"><br><br>
            <h5>Contact Us</h5>
          </div>
        </a>
      </div>
    </div>
  </div>
@endsection