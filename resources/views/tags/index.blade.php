@extends('layouts/app')

@section('content')
  <div class="container">

    <div class="row">
      <h4 class = "col-md-12">Total number of tags: <span class="badge">{{ count($tags) }}</span></h4>
    </div>
    @foreach($tags as $tag)
    <a href="{{ url("tags",['id' => $tag->id]) }}" class = "btn btn-success col-md-4">
      {{ $tag->name }} <span class="badge">{{ count($tag->articles) }}</span></a>
    @endforeach

  </div>
@endsection
