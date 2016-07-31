@foreach ($articles as $article)
  <div class = "row">
    <div class="col-md-12">
        <article>
          <a href = {{ url('articles', $article->id)}}>  {{$article->title}} </a>
        </article>
    </div>
  </div>

  @if($article->excerpt != null)
  <div class = "row">
    <div class = "col-md-12">
      <p>Excerpt: {{ $article -> excerpt }} </p>
    </div>
  </div>
  @endif

  <div class = "row">
    <div class = "col-md-12">
      <!-- Need an alternative -->
      <?php $user = App\User::find($article->user_id); ?>
      <h6>Author:
        <a href="{{ url("users",['id' => $user->id]) }}">
          {{ $user->name }}
        </a>
      </h6>

    </div>
  </div>

  <h6>Published at: {{ $article->published_at}}</h6>

  @include('articles.tags')

  <hr>

@endforeach
