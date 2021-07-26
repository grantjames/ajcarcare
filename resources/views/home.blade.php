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
            AJ Car Care provide both mobile and unit based premium detailing and valeting services to the West Midlands and surrounding areas. Our expertise, along with using only the best products available, ensure your car will look and feel better than it did when it left the showroom.
        </p>
        <p style="margin-bottom: 0;">
            <a href="/about">Find out more</a>
        </p>
    </section>
</div>


<div class="container-fluid">
    <section class="home-blocks">
        <div class="row">
            {{-- <div class="col-sm home-block block1">
                <h3>Services</h3>
                <p>We offer a range of services to suit every budget. From paint correction and ceramic coatings to show car preparation.</p>
                <a href="/services" class="btn btn-outline-light">Find out more</a>
            </div> --}}
            <div class="col-sm home-block block1">
                <h3>Portfolio</h3>
                <p>Take a look at the work we've done in the past to see how AJ Car Care can make your car look and feel better-than-new.</p>
                <a href="https://www.instagram.com/aj_carcare/" target="_blank" class="btn btn-outline-light">View Portfolio</a>
            </div>
            <div class="col-sm home-block block2">
                <h3>Contact</h3>
                <p>Please get in touch to ask any questions you may have and to receive a no obligation quote.</p>
                <a href="/contact" class="btn btn-outline-light">Contact us</a>
            </div>
        </div>
    </section>
</div>

{{-- <div class="container">
    <section class="text-center">
        <h2>Testimonials</h2>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <blockquote class="blockquote text-center mb-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </section>
</div> --}}

@endsection