@extends('layouts/app')

@section('content')
  <div class="container">
    <h3>{{ $user->name }}</h3>

    <h4>Number of articles: {{ count($articles)}}</h4>

  @if (count($articles) > 0)
    @include('articles.articles')
  @endif

</div>
@endsection
