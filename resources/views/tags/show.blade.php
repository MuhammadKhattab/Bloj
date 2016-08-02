@extends('layouts/app')

@section('content')
  <div class="container">

    <h3>Tag: {{ $tag->name }}</h3>

    @if(count($articles) === 0)
      <h4>No articles have this tag</h4>
    @else
      @include('articles.articlesSimple')
    @endif
  </div>
@endsection
