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

  @include('article.tags',compact('article'))

  <hr>

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


</div>
@endsection
