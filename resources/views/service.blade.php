@extends('layouts.main')

@section('container')
    <div class="page-title">
        <div class="align-items-center p-0">
            <div class="col-12">
            <h1 class="fw-light font-weight-bold">Our Services</h1>
            </div>
        </div>
    </div>
    
    <!-- Services -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('../images/washing-machines.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Laundry</h2>
                    <p class="lead mb-0">
                        You can choose to have your freshly-cleaned clothes hung or have them folded. 
                        Our turn-around time for laundry services is 3-4 working days.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('../images/dry-clean.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Dry Cleaning</h2>
                    <p class="lead mb-0">
                        Dry cleaning is cleaning with the application of chemical solvents
                        and in the absence of water. Before your clothes are dry cleaned, 
                        they are carefully inspected for stains. Our turn-around time for 
                        dry cleaning services is 3-4 working days.
                    </p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('../images/iron.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Pressing (Ironing)</h2>
                    <p class="lead mb-0">
                        Leave the arduous task of pressing to us! Every item brought 
                        in for pressing is checked by our specialists to determine 
                        whether the item requires hot pressing or steam pressing. 
                        Our turn-around time for pressing services is 3-4 working days.   
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection