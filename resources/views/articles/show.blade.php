@extends('layouts.app')

@section('content')
<div class = "container">

  <div class="jumbotron" id = "about-jumbotron">
  <div class = "row">
      <h1 class="col-md-11 lead" style="color:white;"> {{ $article->title }}</h1>

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
    <p class = "col-md-12">
      {{ $article -> body }}
    </p>
  </div>

  <hr>

  <div class = "row">
      <h4 class="col-md-6 lead">
        Author: <a href="{{ url("users",['id' => $user->id]) }}">{{ $user->name }}</a>
      </h4>
      <h4 class="col-md-6 lead">Published at: {{ $article->created_at }}</h4>
  </div>

  <div class = "row">
      <p class="col-md-12">Excerpt: {{ $article -> excerpt }}</p>
  </div>

  @include('articles.tags')

</div>

</div>
@endsection
