<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS <--><i class="fab fa-fw fa-"></i></-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{ route('mrpmautos.index') }}">MRPM AUTOS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mrpmautos.index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mrpmautos.services') }}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('mrpmautos.about') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mrpmautos.team') }}">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mrpmautos.contact') }}">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="container my-3 my-sm-5 py-5">
      <h1 class="text-center mb-sm-4 display-1">About</h1>
      <div class="mb-sm-4">
        <h2 class="text-center mb-sm-4">Our story</h2>
        <p>Any Content</p>
      </div>
      <div class="mb-sm-4">
        <h2 class="text-center mb-sm-4">Our office</h2>
        <div class="row">
          <div class="col-12 col-lg-6">
            <figure class="figure">
              <img src="{{ asset('images/Garage-1.jpg') }}" class="figure-img img-fluid" alt="Garage-1">
              <figcaption class="figure-caption small">
                <p class="mb-0 fst-italic">Photo by: Hamza Saleem</p>
                <p class="mb-0">I capture the picture in MRPM Garage</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-12 col-lg-6">
            <figure class="figure">
              <img src="{{ asset('images/office-1.jpg') }}" class="figure-img img-fluid" alt="Office-1">
              <figcaption class="figure-caption small">
                <p class="mb-0 fst-italic">Photo by: Hamza Saleem</p>
                <p class="mb-0">I captured the picture in one of the Mrpm Office</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="mb-sm-4">
        <h2 class="text-center mb-sm-4">Our Clients</h2>
        <div class="row">
          <div class="col-6 col-sm-4 col-lg-2 mb-3">
            <img src="{{ asset('images/ToyotaLogo.jpg') }}" class="img-fluid rounded-circle" alt="Toyota-Logo">
          </div>
          <div class="col-6 col-sm-4 col-lg-2 mb-3">
            <img src="{{ asset('images/SuzukiLogo.png') }}" class="img-fluid" alt="Suzki-Logo">
          </div>
          <div class="col-6 col-sm-4 col-lg-2 mb-3">
            <img src="{{ asset('images/lincolnLogo.jpg') }}" class="img-fluid" alt="Lincoln-Logo">
          </div>
          <div class="col-6 col-sm-4 col-lg-2 mb-3">
            <img src="{{ asset('images/FerrariLogo.jpg') }}" alt="Ferrari-Logo" class="img-fluid">
          </div>
          <div class="col-6 col-sm-4 col-lg-2 mb-3">
            <img src="{{ asset('images/LamborghiniLogo.jpg') }}" alt="Lamborghini-Logo" class="img-fluid">
          </div>
          <div class="col-6 col-sm-4 col-lg-2 mb-3">
            <img src="{{ asset('images/TeslaLogo.png') }}" alt="Tesla-logo" class="img-fluid">
          </div>
          <div class="col-6 col-sm-4 col-lg-2 mb-3"><img src="" alt="" class="img-fluid"></div>
          <div class="col-6 col-sm-4 col-lg-2 mb-3"><img src="" alt="" class="img-fluid"></div>
        </div>
      </div>
    </div>
    <footer class="small bg-light">
      <div class="container py-3">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="list-unstyled">
              <li><a href="{{ route('mrpmautos.index') }}">Home</a></li>
              <li><a href="{{ route('mrpmautos.services') }}">Services</a></li>
              <li><a href="{{ route('mrpmautos.about') }}">About</a></li>
              <li><a href="{{ route('mrpmautos.team') }}">Team</a></li>
              <li><a href="{{ route('mrpmautos.contact') }}">Contact</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Imformation</h6>
            <ul class="list-unstyled">
              <li><a href="">Legal information</a></li>
              <li><a href="">Job opportunities</a></li>
              <li><a href="">FAQ's</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Follow us</h6>
            <ul class="list-unstyled">
              <li><a href=""><i class="fab fa-fw fa-facebook"></i>Facebook</a></li>
              <li><a href=""><i class="fab fa-fw fa-instagram"></i>Instagram</a></li>
              <li><a href=""><i class="fab fa-fw fa-twitter"></i>Twitter</a></li>
              <li><a href=""><i class="fab fa-fw fa-youtube"></i>Youtube</a></li>
              <li><a href=""><i class="fab fa-fw fa-linkedin"></i>LinkedIn</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Our location</h6>
            <address>
              <strong>MrpmAutos</strong>
              <br>
              6257 N Western Ave
              <br>
              Chicago, IL 60659
              <br>
              <i class="fas fa-fw fa-phone"></i> <a href="tel:+17739778888"> +1 (773) 977-8888</a>
              <br>
              <i class="fas fa-fw fa-envelope"></i> <a href="mailto:admin@mrpmautos.com">admin:@mrpmautos.com</a>
            </address>
          </div>
          <ul class="list-inline text-center">
            <li class="list-inline-item">&copy; 2021 MrpmAutos</li>
            <li class="list-inline-item">All rights reserved</li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
