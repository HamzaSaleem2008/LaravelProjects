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
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($countries as $country)
            <tr>
              <td>{{ $country->id }}</td>
              <td>{{ $country->name }}</td>
              <td>{{ $country->created_at }}</td>
              <td>{{ $country->updated_at }}</td>
              <td>
                <a class="btn btn-info" href="/countries/show/{{$country->id}}">Show</a>
                <a class="btn btn-primary" href="/countries/create">Create</a>
                <a class="btn btn-warning" href="/countries/edit/{{$country->id}}">Edit</a>
                <span class="float-left mr-2">
                  <form class="" action="/countries/delete/{{$country->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit" name="button">Delete</button>
                  </form>
                </span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>
