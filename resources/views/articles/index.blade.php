@extends('layouts.app')

@section('content')
  <div class = "container">
    <h2 class="col-md-12">
        Articles
    </h2>

    @foreach ($articles as $article)
      <div class="col-md-4">
          <article>
          <a href = {{ url('articles', $article->id)}}>  {{$article->title}} </a>
        </article>
      </div>
  @endforeach

</div>
@endsection
