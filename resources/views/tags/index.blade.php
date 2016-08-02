@extends('layouts/app')

@section('content')
  <div class="container">

    <div class="row">
      <h4 class = "col-md-12">Tags:</h4>
    </div>
    @foreach($tags as $tag)
    <a href="{{ url("tags",['id' => $tag->id]) }}">
      <h5 class = "col-md-4">{{ $tag->name }}</h5>
    </a>
    @endforeach

  </div>
@endsection
