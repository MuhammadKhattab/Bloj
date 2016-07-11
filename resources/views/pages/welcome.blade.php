@extends('layouts.app')

@section('content')
<img id = "welcome-img" src="images/leaves.jpg" alt="leaves">

<div class="container">

    <div class="row">
      <img src="images/hellow.png" alt = "Hellow" id = "welcome-logo">
    </div>

<div id = "welcome-comp">
    <h5 class = "row">
      <span class "col-md-12" id = "welcome-text">
        The Hellow Tale!
      </span>
    </h5>

    <div class="row">
        <span class "col-md-12">
          <a href="{{ url('/article') }}"><button type="button" class="btn btn-danger">Explore Articles</button></a>
        </span>
    </div>
</div>

</div>
@endsection
