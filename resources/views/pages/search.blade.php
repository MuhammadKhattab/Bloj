@extends('layouts/app')

@section('content')
  <div class = "container">

    <div class = "row">
        <div class="col-md-12">
          <h4>Showing results for "{{ $query }}"</h4>
        </div>
    </div>

      @if (count($articles) === 0)
        <h5>No results found</h5>
      @else
        @include('article.articles')
      @endif

  </div>
@endsection
