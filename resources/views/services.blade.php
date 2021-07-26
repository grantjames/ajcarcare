@extends('layouts.master')

@section('content')

<div class="container portfolio-page">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">New Car Detail</h4>
                    <p class="card-text">Make your car look even better than it did in the showroom.</p>
                    <a href="/website/services/new-car-detail" class="btn btn-aj stretched-link">Find out more</a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Service</h4>
                    <p class="card-text">Some short text about the service offered</p>
                    <a href="/website/services/new-car-detail" class="btn btn-aj stretched-link">Find out more</a>
                </div>
            </div>
        </div>
    </div>

    <p class="text-center">
        More services are available and will be added here soon. In the meantime, why not <a href="/website/contact">contact us</a> to discuss your requirements?
    </p>

</div>

@endsection