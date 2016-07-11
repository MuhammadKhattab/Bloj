@extends('layouts.app')

@section('content')
  <div class = "container">

    <h2>Write a new article</h2>

    <hr>

    {!! Form::open(['url' => 'article']) !!}

    @include('article.form',['submitButtonText' => 'Add Article'])

    {!! Form::close() !!}

    @include('errors.list')

  </div>

@endsection
