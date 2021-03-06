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
                <a class="nav-link active" href="{{ route('mrpmautos.index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mrpmautos.services') }}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mrpmautos.about') }}">About</a>
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

    <div class="bg-light py-3 py-sm-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 mb-3 mb-lg-0">
            <img class="img-fluid" src="{{ asset('images/mrpmcar - Copy.jpg') }}" alt="">
          </div>
          <div class="col-12 col-lg-6">
            <h1 class="display-1">MRPM AUTOS</h1>
            <p class="lead">In MRPM people do engine diagnostics. MRPM also changees the oil because sometimes the oil is either to old or just not good for the car.
            MRPM also changes the color of the car because it doesn't look good or the paint on it is scrached.
            MRPM also changes the tires so if you are in a middle of a street the tire doesn't explode etc.</p>
            <a href="" class="btn btn-primary btn-lg me-2">Read more</a>
            <a href="{{ route('mrpmautos.contact') }}" class="btn btn-outline-primary btn-lg">Contact us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-3 my-sm-5">
      <div class="row bg-light mb-3 mb-sm-5 g-0 p-4">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
          <div class="row">
            <div class="col-12 col-sm-6 text-center">
              <img src="{{ asset('images/Whatwedo.jpg') }}" class="img-fluid rounded-circle mb-4 mb-lg-0" alt="Whatwedo">
            </div>
            <div class="col-12 col-sm-6">
              <h2>What we do</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis convallis velit quis sapien sollicitudin ultrices. Ut metus tortor, aliquet non rutrum ac, dapibus vehicula augue. Etiam congue erat sem, vitae gravida nunc pretium vitae. Fusce sed ex tellus.</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-12 col-sm-6 text-center">
              <img src="{{ asset('images/Whoweare.jpg') }}" class="img-fluid rounded-circle mb-4 mb-lg-0" alt="Whoweare">
            </div>
            <div class="col-12 col-sm-6">
              <h2>Who we are</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis convallis velit quis sapien sollicitudin ultrices. Ut metus tortor, aliquet non rutrum ac, dapibus vehicula augue. Etiam congue erat sem, vitae gravida nunc pretium vitae. Fusce sed ex tellus.</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
          <div class="card">
            <div class="card-header small">
              Published: <time datetime="10-23-2021">10-23-2021</time>
            </div>
            <div class="card-body">
              <h2 class="card-title">News Item</h2>
              <p>Any content</p>
            </div>
            <div class="card-footer d-grid">
              <a class="btn btn-primary" href="#">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
          <div class="card">
            <div class="card-header small">
              Published: <time datetime="11-6-2021">11-6-2021</time>
            </div>
            <div class="card-body">
              <h2 class="card-title">New Item</h2>
              <p>Any content</p>
            </div>
            <div class="card-footer d-grid">
              <a class="btn btn-primary" href="#">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
          <div class="card">
            <div class="card-header small">
              Published: <time datetime="12-21-2021">12-21-2021</time>
            </div>
            <div class="card-body">
              <h2 class="card-title">New Item</h2>
              <p>Any content</p>
            </div>
            <div class="card-footer d-grid">
              <a class="btn btn-primary" href="#">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
          <div class="card">
            <div class="card-header small">
              Published: <time datetime="01-24-2022">01-24-2022</time>
            </div>
            <div class="card-body">
              <h2 class="card-title">New Item</h2>
              <p>Any content</p>
            </div>
            <div class="card-footer d-grid">
              <a class="btn btn-primary" href="#">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-3">

    </div>
    <div class="py-3">

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
