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
      <h1>City Edit</h1>
      <form class="" action="/cities/update/{{$cityData->id}}" method="post">
        @csrf
        <div class="form-group">
          <label for="CityName">City Name</label>
          <input class="form-control" id="CityName" type="text" name="CityName" value="{{$cityData->name}}">
        </div>
        <div class="form-group">
          <label for="CityStatus">City Status</label>
          <input class="form-control" id="CityStatus" type="text" name="CityStatus" value="{{$cityData->status}}">
        </div>
        <button class="btn btn-info" type="submit" name="button">Update</button>
      </form>
    </div>
  </body>
</html>
