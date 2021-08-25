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
  </head>
  <body>
    <div class="container">
      <h1>Edit State Detail</h1>
      <form class="" action="/states/update/{{$stateData->id}}" method="post">
        @csrf
        <div class="form-group">
          <label for="stateName">State Name</label>
          <input class="form-control" id="stateName" type="text" name="stateName" value="{{$stateData->name}}">
        </div>
        <div class="form-group">
          <label for="stateStatus">Status</label>
          <input class="form-control" id="stateStatus" type="text" name="stateStatus" value="{{$stateData->status}}">
        </div>
        <button class="btn btn-primary" type="submit" name="button">Update</button>
      </form>
    </div>
  </body>
</html>
