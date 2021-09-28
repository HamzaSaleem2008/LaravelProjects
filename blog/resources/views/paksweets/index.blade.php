<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Headland+One&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body class="bg-white">
    <nav class="navbar navbar-expand-lg navbar-light navbar-ltblue fixed-top">
      <div class="container">
        <a class="navbar-brand" href=""><img src="{{ asset('images/pslogo.png') }}" width="70px" height="70px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#paksweetsNavBar" aria-controls="paksweetsNavBar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="paksweetsNavBar">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white h4" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white h4" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu" aria-labelledby="menuDropdown">
                <a class="dropdown-item" href="#">Burger</a>
                <a class="dropdown-item" href="#">Pizza</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Drinks</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white h4" id="sweetDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                Sweets
              </a>
              <div class="dropdown-menu" aria-labelledby="sweetDropDown">
                <a class="dropdown-item" href="#">Rasmalai</a>
                <a class="dropdown-item" href="#">Barfi</a>
                <a class="dropdown-item" href="#">Gulab Jamun</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img height=""class="d-block w-100" src="{{ asset('images/pic1.jpg') }}" alt="picture1">
        </div>
        <div class="carousel-item">
          <img height="" class="d-block w-100" src="{{ asset('images/pic2.jpg') }}" alt="picture2">
        </div>
        <div class="carousel-item">
          <img height="" class="d-block w-100" src="{{ asset('images/pic3.jpg') }}" alt="picture3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container">
      <div class="my-5">
        <div class="row">
          <img class="img-fluid" src="{{ asset('images/promotion.jpg') }}" alt="Promotion">
        </div>
      </div>
      <div class="my-5">
        <h2 class="text-center text-ltblue display-4">Sweets, Snacks & Foods!!</h2>
        <div class="row">
          <div class="card-deck">
            <div class="card text-center border-0" style="width: 18rem;">
              <img src="{{ asset('images/content-1.jpg') }}" alt="Halwa">
              <div class="card-body">
                <h5 class="text-ltblue">HALWA</h5>
              </div>
            </div>
            <div class="card text-center border-0" style="width: 18rem;">
              <img src="{{ asset('images/content-2.jpg') }}" alt="Bangali Sweets">
              <div class="card-body">
                <h5 class="text-ltblue">BANGALI SWEETS</h5>
              </div>
            </div>
            <div class="card text-center border-0" style="width: 18rem;">
              <img src="{{ asset('images/content-3.jpg') }}" alt="Kalakand">
              <div class="card-body">
                <h5 class="text-ltblue">KALAKAND</h5>
              </div>
            </div>
            <div class="card text-center border-0" style="width: 18rem;">
              <img src="{{ asset('images/content-4.jpg') }}" alt="Samosa">
              <div class="card-body">
                <h5 class="text-ltblue">SAMOSA</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <div id="foodCarousel1" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ asset('images/content-15.jpg') }}" alt="food">
                  <div class="carousel-caption d-none d-md-block">
                    <a class="btn btn-danger btn-lg text-white" href="#">ORDER NOW</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/content-16.jpg') }}" alt="food">
                  <div class="carousel-caption d-none d-md-block">
                    <a class="btn btn-danger btn-lg text-white" href="#">ORDER NOW</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/content-17.jpg') }}" alt="food">
                  <div class="carousel-caption d-none d-md-block">
                    <a class="btn btn-danger btn-lg text-white" href="#">ORDER NOW</a>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#foodCarousel1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#foodCarousel1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div id="foodCarousel2" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ asset('images/content-18.jpg') }}" alt="food">
                  <div class="carousel-caption d-none d-md-block">
                    <a class="btn btn-danger btn-lg text-white" href="#">ORDER NOW</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/content-19.jpg') }}" alt="food">
                  <div class="carousel-caption d-none d-md-block">
                    <a class="btn btn-danger btn-lg text-white" href="#">ORDER NOW</a>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#foodCarousel2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#foodCarousel2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="my-5">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <div class="card border-0" style="width: 18rem;">
                <img src="{{ asset('images/chococookie.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title text-ltblue">CHOCO COOKIES</h5>
                  <p class="card-text text-muted mb-0">BAKERY</p>
                  <p class="card-text">$7.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card border-0" style="width: 18rem;">
                <img src="{{ asset('images/content-22.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title text-ltblue">BAKARKHANI</h5>
                  <p class="card-text text-muted mb-0">BAKERY</p>
                  <p class="card-text">$7.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card border-0" style="width: 18rem;">
                <img src="{{ asset('images/content-23.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title text-ltblue">DONUTS</h5>
                  <p class="card-text text-muted mb-0">BAKERY</p>
                  <p class="card-text">$7.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card-border-0" style="width: 18rem;">
                <img src="{{ asset('images/content-24.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title text-ltblue">ORANGE JUICE</h5>
                  <p class="card-text text-muted mb-0">JUICE</p>
                  <p class="card-text">$7.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card-border-0" style="width: 18rem;">
                <img src="{{ asset('images/custard.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title text-ltblue">CUSTARD</h5>
                  <p class="card-text text-muted mb-0">BAKERY</p>
                  <p class="card-text">$9.00</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card-border-0" style="width: 18rem;">
                <img src="{{ asset('images/tea.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title text-ltblue">TEA</h5>
                  <p class="card-text text-muted mb-0">DRINKS</p>
                  <p class="card-text">$9.00</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="my-5">
        <div class="col-12">
          <div class="row">
            <div class="col-md-3">
              <div class="card text-center border-0" style="width: 18rem;">
                <span>
                  <i style="font-size: 125px;" class="fas fa-shipping-fast text-ltblue"></i>
                </span>
                <div class="card-body">
                  <h5 class="card-title mt-2">Fast Shipping</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-center border-0" style="width: 18rem;">
                <span>
                  <i style="font-size: 125px;" class="fas fa-check-circle text-ltblue"></i>
                </span>
                <div class="card-body">
                  <h5 class="card-title mt-2">Top Quality Products</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-center border-0" style="width: 18rem;">
                <span>
                  <i style="font-size: 125px;" class="fas fa-lock text-ltblue"></i>
                </span>
                <div class="card-body">
                  <h5 class="card-title mt-2">Securce Payment</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-center border-0" style="width: 18rem;">
                <span>
                  <i style="font-size: 125px;" class="fas fa-utensils text-ltblue"></i>
                </span>
                <div class="card-body">
                  <h5 class="card-title mt-2">Clean Enviorment</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
