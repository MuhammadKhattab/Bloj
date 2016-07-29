@if($article->tags->isEmpty())
  <h6>No tags</h6>
@else
  <h6>Tags:</h6>

  <p class = "row">
    @foreach($article->tags as $tag)
      <a href="{{ url("tags",['name' => $tag->name]) }}">
        <span class = "col-md-2 col-sm-3 col-xs-3 tag-box">{{ $tag->name }}</span>
      </a>
    @endforeach

  </p>
@endif
