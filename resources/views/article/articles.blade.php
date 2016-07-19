@foreach ($articles as $article)
  <div class = "row">
    <div class="col-md-12">
        <article>
          <a href = {{ url('article', $article->id)}}>  {{$article->title}} </a>
        </article>
    </div>
  </div>

  @include('article.tags')

  <hr>

@endforeach
