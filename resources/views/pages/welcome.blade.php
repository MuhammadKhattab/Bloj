
<img id = "welcome-img" src="img/leaves.jpg" alt="leaves">

<div class="container">

    <div class="row">
      <img src="img/hellow.png" alt = "Hellow" id = "welcome-logo">
    </div>
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
        <link href={{ url("css/hellow.css")}} rel="stylesheet">

        <!-- shortcut icon -->
        <link rel="shortcut icon" href="{{ url('img/title.png') }}">

    </head>
    <body>

<div id = "welcome-comp">
    <h5 class = "row">
      <span class "col-md-12" id = "welcome-text">
        The Hellow Tale!
      </span>
    </h5>

    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/articles') }}"><button type="button" class="btn btn-danger">Explore Articles</button></a>
        </span>
    </div>
</div>

</div>

<!-- JavaScripts -->
<!-- <script src = {{ url('js/all.js')}}></script> -->
<script src={{ url("js/libs/jquery.min.js")}}></script>
<script src={{ url("js/libs/bootstrap.min.js")}}></script>
<script src={{ url("js/hellow.js")}}></script>

</body>
</html>
