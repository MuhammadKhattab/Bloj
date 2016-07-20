@extends('layouts.app')

@section('content')
  <div class = "container">

    <h4>Wanna see a magic trick?</h4>
    <p>Hit the hat the the magic wand...</p>
    <div class = "row">

      <div class = "col-md-3">
        <div id="draggable" class="ui-widget-content">
          <img src= {{ url("img/wand.png")}} alt="paper">
        </div>
      </div>

      <div class = "col-md-3">
        <div id="droppable-explore" class="ui-widget-header">
          <img src= {{ url("img/hat.png")}} alt="paper">
        </div>
      </div>

    </div>

  </div>
@endsection
