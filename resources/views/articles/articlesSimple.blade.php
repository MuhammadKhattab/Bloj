<h4>Articles:</h4>
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
@endforeach
