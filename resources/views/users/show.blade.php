@extends('layouts/app')

@section('content')
  <div class="container">

    <div class="row">

      <div class="col-md-11">
        <div class="jumbotron" id = "about-jumbotron">
          <div class="row">
            <h3>{{ $user->name }}</h3>
          </div>
          <div class="row">
            <h4>Number of articles: <span class="badge">{{ count($articles)}}</span></h4>
          </div>
        </div>
      </div>

      @if(Auth::check() && $user->id === Auth::user()->id)
        <div class="col-md-1">
          <div class="btn-group-vertical">
            <a href="{{ url('/articles/create') }}" class="btn btn-success">
              <i class="fa fa-plus" aria-hidden="true"></i>New article</a>
            <a href="{{ url('/settings') }}" class="btn btn-success">
              <i class="fa fa-cog" aria-hidden="true"></i>Settings</a>
          </div>
        </div>
      @endif
    </div>

  @if (count($articles) > 0)
    @include('articles.articles')
  @endif

</div>
@endsection
