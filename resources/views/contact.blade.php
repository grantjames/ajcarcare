@extends('layouts.master')

@section('content')

<div class="jumbotron jumbotron-fluid" id="contact-jumbotron">
    <div class="container">
        <h1>Contact</h1>
    </div>
</div>

<div class="container">

    @if(\Session::has('message_sent') && \Session::get('message_sent'))
        <div class="alert alert-success text-center" role="alert">
            Thank you for your enquiry! We'll be in touch soon.
        </div>
    @endif

    @if(\Session::has('message_sent') && !\Session::get('message_sent'))
        <div class="alert alert-danger text-center" role="alert">
            Sorry! There was a problem sending your enquiry. Please call or email us.
        </div>
    @endif

    <div class="row">
        <div class="col-sm-4">
            <div class="mb-3">
                <h2>Email</h2>
                <a id="email-link" href="mailto:ash-AT-ajcarcare.co.uk">ash-AT-ajcarcare.co.uk</a>
            </div>

            <div class="mb-3">
                <h2>Phone</h2>
                <a href="tel:+447977530190">07977 530 190</a>
            </div>
        </div>

        <div class="col-sm-8">
            <h2>Send us a message</h2>
            <form action="/contact/send" method="POST" id="enquiry-form">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" />
                    </div>

                    <div class="col">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" />
                    </div>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea rows="5" name="message" id="message" class="form-control"></textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-auto">
                        <label for="spam-check" class="col-form-label">Spam check: what's 2 + 3?</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="spam_check" id="spam-check" class="form-control"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-aj" id="submit_button">Send</button>
            </form>
        </div>
    </div>
</div>

@section('scripts')

<script>
    $(document).ready(function() {
        var el = $('#email-link');
        el.prop('href', 'mailto:' + 'ash' + '@ajcarcare.co.uk');
        el.text('ash' + '@ajcarcare.co.uk');

        $('#enquiry-form').submit(function(event) {
            var button = $('#submit_button');
            var message = $('#message').val();
            var check = $('#spam-check').val();

            button.text('Sending...');
            button.prop('disabled', true);
            
            if (check == "5" && message != "") {
                return;
            }

            alert('Please fill in the form correctly and try to send again.');
            button.text('Send');
            button.prop('disabled', false);
            event.preventDefault();
        });
    });
</script>

@endsection

@endsection