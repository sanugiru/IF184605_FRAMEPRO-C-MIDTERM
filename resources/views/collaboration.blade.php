@extends('layouts.main')

@section('container')
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('../images/washing-machines.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Interested in Joining Us?</h2>
                    <p class="lead pb-0">
                        We, in Laundry.in always strive to bring our services closer
                        for any of our Costumers, with your help we could reach an even 
                        greater distance.
                    </p>
                    <p class="lead pb-2">
                        Register your service with us today and become a part of Laundry.in 
                        family. By joining us, you would be getting all the benefit that you can only
                        get by becoming a part of our team!
                    </p>
                    <p class="lead pb-2">
                        Contact us for more information
                    </p>
                    <a class="btn btn-outline-primary" asp-page="/q1/Service">
                        <span>Our Contact</span>          
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection