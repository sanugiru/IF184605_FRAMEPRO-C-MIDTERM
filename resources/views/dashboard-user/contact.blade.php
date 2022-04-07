@extends('dashboard-user.layouts.main');

@section('container')
<div style="display: flex;">
    <div style="padding-left: 100px; padding-right: 100px; padding-top: 50px; flex: 40%;">
      <h3>Get in touch</h3>
      <small>Want to get in touch? We'd love to hear from you.<br>Here's how you can reach us!</small>
      <div style="text-align: center; margin-top: 30px; margin-right: 60px;">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div style="padding: 30px;">
              <img src="../images/whatsapp.png" style="height: 80px;"><br><br>
              <h5>Whatsapp</h5>
            </div>
          </a>
        </div>
        <div class="list-group" style="margin-top: 20px;">
          <a href="http://sunagaru-001-site1.gtempurl.com/q1" class="list-group-item list-group-item-action flex-column align-items-start">
            <div style="padding: 30px;">
              <img src="../images/store.png" style="height: 80px;"><br><br>
              <h5>Address</h5>
            </div>
          </a>
        </div>
        <div class="list-group" style="margin-top: 20px;">
          <a href="http://sunagaru-001-site1.gtempurl.com/q1" class="list-group-item list-group-item-action flex-column align-items-start">
            <div style="padding: 30px;">
              <img src="../images/web.png" style="height: 80px;"><br><br>
              <h5>Website</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div style="flex: 60%; height: 870px;" class="bg-kanan"></div>
  </div>
@endsection