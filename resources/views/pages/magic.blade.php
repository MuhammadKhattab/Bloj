@extends('layouts.app')

@section('content')
  <div class = "container">

    <div class="jumbotron" id="about-jumbotron">
      <h3>Wanna see a magic trick?</h3>
      <p>Expecto Patronum!</p>
      <div class = "row">
        <div class = "col-md-3">
          <div id="draggable" class="ui-widget-content">
            <img src= {{ url("img/wand.png")}} alt="paper">
          </div>
        </div>

        <div class = "col-md-3">
          <div id="droppable-magic" class="ui-widget-header">
            <img src= {{ url("img/hat.png")}} alt="paper">
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
