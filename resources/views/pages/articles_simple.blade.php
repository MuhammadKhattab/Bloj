@if (count($articles) === 0)
  <h4>No articles found</h4>
@else
  <h4>Articles:</h4>
  @foreach ($articles as $article)
    <div class = "row">
      <div class="col-md-12">
          <h4>
            <a href = {{ url('articles', $article->id)}}>  {{$article->title}} </a>
          </h4>
      </div>
    </div>

    <div class = "row">
      <div class = "col-md-12">
        <p>Excerpt: {{ $article -> excerpt }} </p>
      </div>
    </div>
    @endforeach
@endif
