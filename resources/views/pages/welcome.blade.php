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
      <link href={{ url("css/libs/bootstrap.min.css")}} rel="stylesheet">

      <link href={{ url("css/hellow.css")}} rel="stylesheet">

      <!-- shortcut icon -->
      <link rel="shortcut icon" href="{{ url('img/title.png') }}">

  </head>

  <body>

    <img id = "welcome-img" src="img/welcome.jpg" alt="welcome">

    <div class="container">

      <div class = "row">
        <h1 class = "display-1 col-md-2 col-md-offset-4 welcome-text">Bloj</h1>
      </div>

      <div class = "row">
        <h4 class = "display-3 col-md-10 welcome-text">Say Hellow to the new articles... </h4>
      </div>

      <div class="welcome-btns">

        <div class="row">
            <a href="{{ url('/articles') }}"><button type="button" class="col-md-2 col-md-offset-4 btn btn-primary welcome-btn">Explore</button></a>
        </div>
        <div class="row">
            <a href="{{ url('/login') }}"><button type="button" class="col-md-2 col-md-offset-4 btn btn-primary welcome-btn">Login</button></a>
        </div>
        <div class="row">
            <a href="{{ url('/register') }}"><button type="button" class="col-md-2 col-md-offset-4 btn btn-primary  welcome-btn">Register</button></a>
        </div>

    </div>

  </div>
 </body>

</html>
