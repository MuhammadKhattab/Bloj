@if(!$article->tags->isEmpty())
  <h6 class="lead">Tags:</h6>

  <p class = "row">
    @foreach($article->tags as $tag)
      <a href="{{ url("tags",['id' => $tag->id]) }}" class = "label label-success">{{ $tag->name }}</a>
    @endforeach

  </p>
@endif
