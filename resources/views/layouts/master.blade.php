<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">

    <title>AJ Car Care - Premium Automotive Detailing</title>
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/logo-nav.png" alt="AJ CAR CARE" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(2) == 'about' ? 'active' : '' }}" href="/about">ABOUT</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ request()->segment(2) == 'services' ? 'active': '' }}" href="/services">SERVICES</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(2) == 'portfolio' ? 'active' : '' }}" href="https://www.instagram.com/aj_carcare/" target="_blank">PORTFOLIO</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(2) == 'contact' ? 'active' : '' }}" href="/contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="https://www.instagram.com/aj_carcare/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/AJ-Car-Care-100788921520897/" target="_blank"><i class="fa fa-facebook-official"></i></a>
                </div>
                <div class="col text-right">
                    &copy; 2020 AJ Car Care
                </div>
            </div>
            
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    @yield('scripts')
  </body>
</html>