@extends('layouts.app')

@section('content')
  <div class = "container">

    <h4>Explore this thing</h4>
    <p>You can even drop that thing right there in that other thing to start exploring, don't believe me? Just watch!</p>
    <div class = "row">

      <div class = "col-md-3">
        <div id="draggable" class="ui-widget-content">
          <p>Explore articles</p>
        </div>
      </div>

      <div class = "col-md-3">
        <div id="droppable-explore" class="ui-widget-header">
          <p>Drop here</p>
        </div>
      </div>

    </div>

  </div>
@endsection
