@extends('layouts.app')

@section('content')
<div class = "container">

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

  <div class = "row">
    <div class = "col-md-12">
      <h2> {{ $article->title }}</h2>
    </div>
  </div>

  <div class = "row">
    <article class = "col-md-12">
      {{ $article -> body }}
    </article>
  </div>

    @unless($article->tags->isEmpty())
    <div class = "row">
      <h5 class = "col-md-12">Tags</h5>
    </div>
    <div class = "row">
      <ul>
        @foreach($article->tags as $tag)
          <li class = "col-md-2">{{ $tag->name }}</li>
        @endforeach
      </ul>
    </div>
  @endunless

</div>
@endsection
