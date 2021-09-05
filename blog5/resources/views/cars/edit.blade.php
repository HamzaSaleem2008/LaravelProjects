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
      <h1>Car Edit</h1>
      <form class="" action="/cars/update/{{$carData->id}}" method="post">
        @csrf
        <div class="form-group">
          <label for="CarName">Car Name</label>
          <input class="form-control" id="CarName" type="text" name="CarName" value="{{$carData->make}}">
        </div>
        <div class="form-group">
          <label for="CarModel">Model</label>
          <input class="form-control" id="CarModel" type="text" name="CarModel" value="{{$carData->model}}">
        </div>
        <div class="form-group">
          <label for="CarYearOfMake">Year Of Make</label>
          <input class="form-control" id="CarYearOfMake" type="text" name="CarYearOfMake" value="{{$carData->year_of_make}}">
        </div>
        <div class="form-group">
          <label for="CarNoPlateAllot">NoPlateAllot</label>
          <input class="form-control" id="CarNoPlateAllot" type="text" name="CarNoPlateAllot" value="{{$carData->no_plate_allot}}">
        </div>
        <div class="form-group">
          <label for="CarVin">Vin</label>
          <input class="form-control" id="CarVin" type="text" name="CarVin" value="{{$carData->vin}}">
        </div>
        <button class="btn btn-info" type="submit" name="button">Update</button>
      </form>
    </div>
  </body>
</html>
