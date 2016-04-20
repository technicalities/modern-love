<html>
    <head>
        <title>@yield('title')</title>
    </head>


    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {!! Html::style( asset('css/nav.css')) !!}
    {!! Html::style( asset('css/main.css')) !!}

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


    <!-- Nav -->
    <body>
        @section('navbar')
        <div id='navbar'>
          <ul id="navUl">
            <a href="{{ url('/') }}"><img id="logo" src="{{asset('img/logo.png')}}"></a>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/model') }}">A Model</a></li>
            <li><a id="prob" href="{{ url('/soproblematic') }}">Problems</a></li>
          </ul>
        </div>

        @show
        <!-- Particulars -->
        <div class="container">
          <div class="content">@yield('content') </div>
        </div>
    </body>
</html>
