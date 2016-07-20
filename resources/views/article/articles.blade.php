@foreach ($articles as $article)
  <div class = "row">
    <div class="col-md-12">
        <article>
          <a href = {{ url('article', $article->id)}}>  {{$article->title}} </a>
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
      <h6>Author:
        <!-- Need an alternative -->
        <?php $user = App\User::findOrFail($article->user_id); ?>
        {{ $user->name }}
      </h6>
    </div>
  </div>

  @include('article.tags')

  <hr>

@endforeach
