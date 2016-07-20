@foreach ($articles as $article)
  <div class = "row">
    <div class="col-md-12">
        <article>
          <a href = {{ url('article', $article->id)}}>  {{$article->title}} </a>
        </article>
    </div>
  </div>

  <div class = "row">
    <div class = "col-md-12">
      <h5>Author:
        <?php $user = App\User::findOrFail($article->user_id); ?>
        {{ $user->name }}
      </h5>
    </div>
  </div>

  @include('article.tags')

  <hr>

@endforeach
