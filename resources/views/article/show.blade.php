@extends('layouts.app')

@section('content')
<div class = "container">

  <div class = "row">
    <div class = "col-md-12">
      <h3> {{ $article->title }}</h3>
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
      <h5>Author: {{ $user->name }} </h5>
    </div>
  </div>

  @include('article.tags')

  <hr>

  @if($article->user_id === Auth::user()->id)
    <div class = "row">

      <div class = "col-md-1">
        <a href="{{ route('article.edit', $article->id) }}"><button type="button" class="btn btn-danger">
          <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Edit</button></a>
      </div>

      <div class = "col-md-1">
        {!! Form::open(['method' => 'DELETE', 'route' => ['article.destroy', $article->id]]) !!}
          <button type="submit" class="btn btn-danger">
            <i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
        {!! Form::close() !!}
      </div>

    </div>
  @endif


</div>
@endsection
