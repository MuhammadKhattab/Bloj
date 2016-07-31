@extends('layouts.app')

@section('content')
<div class = "container">

  <div class = "row">
    <div class = "col-md-12">
      <h3> {{ $article->title }}</h3>
    </div>
  </div>

  <div class = "row">
    <p class = "col-md-12">
      {{ $article -> body }}
    </p>
  </div>

  <hr>

  <div class = "row">
    <div class = "col-md-12">
      <h5>Author:
        <a href="{{ url("users",['id' => $user->id]) }}">
          {{ $user->name }}
        </a>
      </h5>
    </div>
  </div>

  <h5>Published at: {{ $article->published_at }}</h5>

  @include('articles.tags')

  @if(Auth::check() && $article->user_id === Auth::user()->id)
    <div class = "row">

      <div class = "col-md-1">
        <a href="{{ route('articles.edit', $article->id) }}"><button type="button" class="btn btn-danger">
          <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Edit</button></a>
      </div>

      <div class = "col-md-1">
        {!! Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->id]]) !!}
          <button type="submit" class="btn btn-danger">
            <i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
        {!! Form::close() !!}
      </div>

    </div>
  @endif

</div>
@endsection
