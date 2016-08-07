@extends('layouts/app')

@section('content')
  <div class="container">

    <h3>Tag: {{ $tag->name }}</h3>

    @include('pages.articles_simple')

  </div>
@endsection
