@foreach ($articles as $article)
<div class="jumbotron" id = "about-jumbotron">
  <div class = "row">
    <h1 class="col-md-12 lead">
      <a href = {{ url('articles', $article->id)}}>{{ $article->title }}</a>
    </h1>
  </div>

  <?php $user = $authors[$article->user_id]; ?>

  <div class = "row">
      <h6 class="col-md-6 lead">Author:
        <a href="{{ url("users",['id' => $user->id]) }}">{{ $user->name }}</a>
      </h6>

      <h6 class="col-md-6 lead">Published at: {{ $article->created_at }}</h6>
  </div>

  <div class = "row">
    <div class = "col-md-12">
      <p class="lead">Excerpt: {{ $article -> excerpt }} </p>
    </div>
  </div>

  @include('articles.tags')

</div>
@endforeach
