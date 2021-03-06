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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-ltblue fixed-top">
      <div class="container">
        <a class="navbar-brand" href=""><img src="{{ asset('images/logo-dark.svg') }}" width="30px" height="30px" alt=""></a>
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
  </body>
</html>
