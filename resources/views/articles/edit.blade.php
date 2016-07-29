@extends('layouts.app')

@section('content')
  <div class = "container">

    <h2>Edit: {!! $article->title !!}</h2>

    <hr>

    {!! Form::model($article, ['method' => 'PATCH', 'action' =>['ArticlesController@update', $article->id], 'id' =>'thaForm']) !!}

      @include('articles.form', ['submitButtonText' => 'Update Article'])

    {!! Form::close() !!}

    @include('errors.list')

  </div>
@endsection
