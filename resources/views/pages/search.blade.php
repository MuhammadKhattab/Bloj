@extends('layouts/app')

@section('content')
  <div class = "container">

    <div class = "row">
      <h4 class="col-md-12">Showing results for "{{ $query }}"</h4>
    </div>

    <div class="row">
      <h4 class = "col-md-12">Total number of results: <span class="badge">{{ count($tags)+count($articles)+count($users) }}</span></h4>
    </div>

    <hr>

      @include('pages.articles_simple')

      <hr>

      @if(count($users) === 0)
        <h4>No users found</h4>
      @else
        <h4>Users:</h4>
        @foreach($users as $user)
          <h5><a href = "{{ url('users', $user->id)}}">{{ $user-> name }}</a></h5>
        @endforeach
      @endif

      <hr>

      @if(count($tags) === 0)
        <h4>No tags found</h4>
      @else
        <h4>Tags:</h4>
        @foreach($tags as $tag)
          <h5><a href = {{ url('tags', $tag->id)}}>{{ $tag-> name }}</a></h5>
        @endforeach
      @endif

  </div>
@endsection
