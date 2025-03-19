<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Certificate Generator</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
  </head>
  <body>

    @include ('layout.nav')
    @yield ('content')

    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
  </body>
</html>