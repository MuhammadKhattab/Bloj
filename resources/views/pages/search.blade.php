@extends('layouts/app')

@section('content')
  <div class = "container">

    <div class = "row">
      <h4 class="col-md-12">Showing results for "{{ $query }}"</h4>
    </div>

      @if (count($articles) === 0)
        <h5>No articles found</h5>
      @else
        @include('articles.articlesSimple')
      @endif

      <hr>

      @if(count($users) === 0)
        <h5>No users found</h5>
      @else
      <h4>Users:</h4>
        @foreach($users as $user)
          <a href = {{ url('users', $user->id)}}><h5>{{ $user-> name }}</h5></a>
        @endforeach
      @endif

      <hr>

      @if(count($tags) === 0)
        <h5>No tags found</h5>
      @else
        <h4>Tags:</h4>
        @foreach($tags as $tag)
            <a href = {{ url('tags', $tag->id)}}><h5>{{ $tag-> name }}</h5></a>
        @endforeach
      @endif

  </div>
@endsection
