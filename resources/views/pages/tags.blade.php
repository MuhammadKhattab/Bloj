@extends('layouts/app')

@section('content')
  <div class="container">

    @foreach($tags as $tag)
      <h6>{{ $tag->name }}</h6>
    @endforeach

  </div>
@endsection
