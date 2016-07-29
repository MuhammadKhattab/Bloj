<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hellow</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link href={{ url("css/libs/bootstrap.min.css")}} rel="stylesheet">
    <link href={{ url("css/libs/select2.min.css")}} rel="stylesheet" />
    <link href={{ url("css/libs/jquery-ui.css")}} rel="stylesheet">
    <link href={{ url("css/hellow.css")}} rel="stylesheet">

    <!-- shortcut icon -->
    <link rel="shortcut icon" href="{{ url('img/title.png') }}">

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
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
                    <img src={{ url("img/logo.png")}} alt="logo">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

              {!! Form::open(['method'=>'GET','url'=>'search/articles','class'=>'navbar-form navbar-left','role'=>'search']) !!}
                <div class="input-group">
                    {!! Form::text('search',null,  ['class' => 'form-control', 'placeholder'=>'search', 'required']) !!}
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
              {!! Form::close() !!}

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      Wandern <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/articles') }}">All articles</a></li>
                      <li><a href="{{ url('/tags') }}">All tags</a></li>
                      @if(Auth::user())
                        <li><a href="{{ url('articles/create') }}">Create an article</a></li>
                      @endif
                      <li role="separator" class="divider"></li>
                      <li><a href="{{ url('/about') }}">About</a></li>
                      <li><a href="{{ url('/contact') }}">Contact us</a></li>
                    </ul>
                  </li>

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
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

    <div class = "container">
      @include('flash::message')
    </div>

    @yield('content')

</body>

<footer>

  <div class="navbar navbar-default navbar-fixed-bottom">

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse-footer">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <div class="container">
      <div class="collapse navbar-collapse" id="app-navbar-collapse-footer">
        <ul class="nav navbar-nav">
          <li><a href= {{ url('about')}}>About</a></li>
          <li><a href= {{ url('contact')}}>Contact us</a></li>
          <li><a href= {{ url('magic')}}>Magic</a></li>
        </ul>
      </div>
    </div>

</footer>

<!-- JavaScripts -->
<!-- <script src = {{ url('js/all.js')}}></script> -->
<script src={{ url("js/libs/jquery.min.js")}}></script>
<script src={{ url("js/libs/bootstrap.min.js")}}></script>
<script src={{ url("js/libs/select2.min.js")}}></script>
<script src={{ url("js/libs/jquery-ui.js")}}></script>
<script src={{ url("js/libs/jquery-ui-punch.min.js")}}></script>
<script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
<script src={{ url("js/hellow.js")}}></script>


</html>
