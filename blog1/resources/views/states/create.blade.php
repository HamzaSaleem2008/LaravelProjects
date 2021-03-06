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
      <h1>States Create</h1>
      <form class="" action="/states/store" method="post">
        @csrf
        <div class="form-group">
          <label for="StateName">States Name</label>
          <input class="form-control" id="StateName" type="text" name="StateName" value="">
        </div>
        <div class="form-group">
          <label for="Status">Status</label>
          <input class="form-control" id="Status" type="text" name="Status" value="">
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
