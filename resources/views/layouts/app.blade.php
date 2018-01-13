<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beeefood</title>
    <link rel="icon" href="{{asset('/assets/logo/bee.png')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <script type="text/javascript" src="{{asset('/js/index.js')}}"></script>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <div>
                    <img src="{{asset('/assets/logo/bee.png')}}" width="35" alt="">
                    <span>Beeefood</span>
                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" style="text-align: center" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-center">
                <li><a href="{{ url('/home') }}">New</a></li>
                <li><a href="{{ url('/home') }}">Trending</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Location
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu"> 
                        <li id="anggrek"><a href="#" id="anggrek">Anggrek</a></li>
                        <li><a href="#" id="syahdan">Syahdan</a></li>
                        <li><a href="#">Kijang</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Type
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu"> 
                        <li id="anggrek"><a href="#" id="anggrek">Breakfast</a></li>
                        <li><a href="#" id="syahdan">Lunch</a></li>
                        <li><a href="#">Dinner</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Cafe</a></li>
                        <li><a href="#">Dessert</a></li>
                    </ul>
                </li>
                <li><a href="#">Partnership</a></li>
                <li><a href="{{ url('/about-us') }}">About Us</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}" class="navbar-toggle">Create an account</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
