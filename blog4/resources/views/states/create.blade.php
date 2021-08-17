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
    <body>
      <div class="container">
        <h1>States Create</h1>
        <form class="" action="index.html" method="post">
          <div class="form-group">
            <label for="StatesName">States Name</label>
            <input class="form-control" id="StatesName" type="text" name="StatesName" value="">
          </div>
          <div class="form-group">
            <label for="Status">Status</label>
            <input class="form-control" id="Status" type="text" name="Status" value="">
          </div>
        </form>
      </div>
  </body>
</html>