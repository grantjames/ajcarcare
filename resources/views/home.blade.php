@extends('layouts.master')

@section('content')

<div class="jumbotron jumbotron-fluid" id="home-jumbotron">
    <div class="container">
        <img src="/images/logo.png" alt="AJ Car Care">

        <div>
            <a href="/contact" class="btn btn-aj btn-lg">Book an Appointment</a>
            <a href="/about" class="btn btn-outline-light btn-lg">Why AJ Car Care?</a>
        </div>
    </div>
</div>

<div class="container">
    <section class="text-center">
        <h2>About AJ Car Care</h2>
        <p>
            Some text here about Ash and AJ Car Care. Just 2 or 3 sentences to make up a full paragraph. Some text here about Ash and AJ Car Care. Just 2 or 3 sentences to make up a full paragraph.
        </p>
        <p style="margin-bottom: 0;">
            <a href="/about">Find out more</a>
        </p>
    </section>
</div>


<div class="container-fluid">
    <section class="home-blocks">
        <div class="row">
            <div class="col-sm home-block block1">
                <h3>Services</h3>
                <p>We offer a range of services to suit every budget. From paint correction and ceramic coatings to show car preparation.</p>
                <a href="#" class="btn btn-outline-light">Find out more</a>
            </div>
            <div class="col-sm home-block block2">
                <h3>Portfolio</h3>
                <p>Take a look at the work we've done in the past to see how AJ Car Care can make your car look and feel better-than-new.</p>
                <a href="#" class="btn btn-outline-light">View Portfolio</a>
            </div>
            <div class="col-sm home-block block3">
                <h3>Contact</h3>
                <p>Please get in touch to ask any questions you may have and to receive a no obligation quote.</p>
                <a href="#" class="btn btn-outline-light">Contact us</a>
            </div>
        </div>
    </section>
</div>

<div class="container">
    <section class="text-center">
        <h2>Testimonials</h2>
        <p class="lead" style="margin-bottom: 0;">
            <em>My car was so shiny it blinded other drivers.<br> - A. Driver</em>
        </p>
    </section>
</div>

@endsection