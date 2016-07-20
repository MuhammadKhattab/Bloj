@if($article->tags->isEmpty())
  <h6>No tags</h6>
@else
  <h6>Tags:</h6>

  <p class = "row">
    @foreach($article->tags as $tag)
      <span class = "tag-box">{{ $tag->name }}</span>
    @endforeach
    
  </p>
@endif
