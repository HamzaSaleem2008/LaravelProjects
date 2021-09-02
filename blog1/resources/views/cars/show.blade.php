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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1>Car</h1>
      <h4>Car Name: {{$carData->make}}</h4>
      <h4>City Status:{{$cityData->model}}</h4>
      <h4>Car Status:{{$carData->year_of_make}}</h4>
      <h4>Car Status:{{$carData->no_plate_allot}}</h4>
      <h4>Car Status:{{$carData->vin}}</h4>
      <p>Created At:{{$cityData->created_at}}</p>
      <p>Updated At:{{$cityData->updated_at}}</p>
    </div>
  </body>
</html>
