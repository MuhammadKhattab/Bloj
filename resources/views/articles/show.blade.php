@extends('layouts.app')

@section('content')
<div class = "container">
  <h2> {{ $article->title }}</h2>

  <article>
    {{ $article -> body }}
  </article>
</div>
@endsection
