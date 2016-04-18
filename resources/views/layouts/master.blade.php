<html>
    <head>
        <title>@yield('title')</title>
    </head>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('sass/main.css') }}" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <body>
        @section('navbar')
        <div id='navbar'>
          <img src="/resources/assets/images/logo.png">
          {{-- <img src="{{ elixir('images/logo.png') }}"> --}}
          <ul><li></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li>Problems</li>
          </ul>
        </div>

        @show
        <div class="container"> @yield('content') </div>

    </body>
</html>
