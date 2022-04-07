@extends('layouts.main')

@section('container')
<header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <h1 class="fw-light display-1 font-weight-bold"><b>WELCOME</b></h1>
          <p class="lead font-weight-bold">Make your clothes clean with Laundry.in</p>
          <a class="btn btn-outline-primary" href="/login">
              <span>Get Started</span>          
          </a>
        </div>
      </div>
    </div>
  </header>
  
  <section class="features-icons bg-light text-center">
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                      <h3>LAUNDRY</h3>
                      <p class="lead mb-0">Let us take care of it while you enjoy with your family and friends.</p>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                      <h3>DRY CLEAN</h3>
                      <p class="lead mb-0">We will get them ready for you folded or hung, however you like it.</p>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                      <h3>PRESSING</h3>
                      <p class="lead mb-0">Get freshly pressed clothes, ready for any occasion.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection