@extends('dashboard-user.layouts.main');

@section('container')
<div style="padding-left: 100px; padding-right: 100px; padding-top: 50px;">
    <h3>Services Pricelist</h3>
    <small>We offer you our best services</small><br><br>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Type</th>
          <th scope="col">Duration</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($services as $service)    
            <tr class="table-secondary">
                <th scope="row" value={{ $service->id }}>{{ $service->name }}</th>
                <td value={{ $service->id }}>{{ $service->duration }}</td>
                <td value={{ $service->id }}>IDR {{ $service->price }}/kg</td>
            </tr>
          @endforeach
      </tbody>
    </table>
    <br>
    <a href="/dashboard-user/order">
      <button type="button" class="btn btn-primary btn-lg" style="margin-left: 45%;">Order now</button>
    </a>
  </div>
@endsection