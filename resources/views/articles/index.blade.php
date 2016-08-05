@extends('layouts.app')

@section('content')
  <div class = "container">

    <div class="jumbotron" id = "about-jumbotron">
      <div class = "row">
          <h1 class="lead" style="color:white;">Articles</h1>
          <p>
            Articles... Articles everywhere... and if you don't see any... it's OK... it's not your fault...
          </p>
          <a href="{{ url('/articles/create') }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Create</a>
      </div>
    </div>



    @include('articles.articles')

</div>
@endsection
