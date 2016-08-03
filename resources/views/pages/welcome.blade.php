<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Welcome | Bloj</title>

      <!-- Fonts -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

      <!-- Styles -->
      <link rel="stylesheet" href=" {{ url('css/libs/bootstrap4.min.css') }}">
      <link href={{ url("css/libs/select2.min.css")}} rel="stylesheet" />
      <link href={{ url("css/libs/jquery-ui.css")}} rel="stylesheet">
      <link href={{ url("css/hellow.css")}} rel="stylesheet">
      <!-- shortcut icon -->
      <link rel="shortcut icon" href="{{ url('img/title.png') }}">

  </head>

  <body id = "welcome">

    <img src="{{ url('img/welcome.jpg') }}" alt="welcome" id = "welcome-img">

    <div class="container">

      <div class="row">
        <div class="offset-md-9">
          <div class="container">
            <a href="login" class="btn btn-outline-secondary">Log in</a>
            <a href="register" class="btn btn-outline-secondary">Sign up</a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h1 id = "welcome-head">Bloj</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h6 id= "welcome-text">Someone... somewhere... in this universie...</h6>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h6 id= "welcome-text">is writing... something... somehow...</h6>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div>
            <a href="articles" class="col-md-4 offset-md-4 btn btn-lg btn-outline-secondary">Explore</a>
          </div>
        </div>
      </div>

    </div>

    <hr>

    <div class="container">
      <div class="row">

        <div class="col-sm-4">
          <div class="card card-block" id = "welcome-card">
            <h4 class="card-title">Magic</h4>
            <p class="card-text">We have magic tricks...</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card card-block" id = "welcome-card">
            <h4 class="card-title">Articles</h4>
            <p class="card-text">We had some of those...</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card card-block" id = "welcome-card">
            <h4 class="card-title">Health</h4>
            <p class="card-text">I like carrots...</p>
          </div>
        </div>

      </div>
    </div>


  </body>

  <footer>
   <div class="container">
     <div id = "welcome-footer">
       <a href="about" class="btn btn-link">About</a>
       <a href="contact" class="btn btn-link">Contact us</a>
     </div>
   </div>
  </footer>


   <!-- JavaScripts -->
   <script src={{ url("js/libs/jquery.min.js")}}></script>
   <script src={{ url("js/libs/bootstrap.min.js")}}></script>
   <script src={{ url("js/libs/select2.min.js")}}></script>
   <script src={{ url("js/libs/jquery-ui.js")}}></script>
   <script src={{ url("js/libs/jquery-ui-punch.min.js")}}></script>
   <script src={{ url("js/hellow.js")}}></script>

</html>
