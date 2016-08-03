@extends('layouts/app')

@section('content')
  <div class="container">
    <h3>{{ $user->name }}</h3>

    @if(Auth::check() && $user->id === Auth::user()->id)
      <div class="row">
        <a href="{{ url('/articles/create') }}"><button type="button" class="col-md-2 btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>New article</button></a>
        <a href="{{ url('/settings') }}"><button type="button" class="col-md-2 col-md-offset-1 btn btn-primary"><i class="fa fa-cog" aria-hidden="true"></i>Settings</button></a>
      </div>
    @endif

    <h4>Number of articles: {{ count($articles)}}</h4>

  @if (count($articles) > 0)
    @include('articles.articles')
  @endif

</div>
@endsection
