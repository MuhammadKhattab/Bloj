@extends('layouts/app')

@section('content')
  <div class="container">

    @foreach($tags as $tag)
    <a href="{{ url("tags",['name' => $tag->name]) }}">
      <h5 class = "col-md-4">{{ $tag->name }}</h5>
    </a>
    @endforeach

  </div>
@endsection
