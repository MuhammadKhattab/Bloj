@extends('layouts.app')

@section('content')
  <div class = "container">

    <h2>Write a new article</h2>

    <hr>

    {!! Form::open(['url' => 'articles', 'id'=>'thaForm']) !!}

    @include('articles.form',['submitButtonText' => 'Add Article'])

    {!! Form::close() !!}

  </div>

@endsection
