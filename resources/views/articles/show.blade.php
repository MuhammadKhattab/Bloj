@extends('layouts.app')

@section('content')
<div class = "container">

  <div class = "row">
    <div class = "col-md-11">
      <h3> {{ $article->title }}</h3>
    </div>

    @if(Auth::check() && $article->user_id === Auth::user()->id)
      <div class="col-md-1">
        <div class="row">
          <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary col-md-12">
            <i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
        </div>
        <div class="row">
          {!! Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->id]]) !!}
            <button type="submit"class="btn btn-danger  col-md-12">
              <i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
          {!! Form::close() !!}
        </div>
      </div>
    @endif

  </div>

  <div class = "row">
    <div class = "col-md-12">
      <p>Excerpt: {{ $article -> excerpt }}</p>
    </div>
  </div>

  <hr>

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

  <h5>Published at: {{ $article->create_at }}</h5>

  @include('articles.tags')

</div>
@endsection
