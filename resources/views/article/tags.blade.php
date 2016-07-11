@unless($article->tags->isEmpty())
<div class = "row">
  <h5 class = "col-md-1">Tags:</h5>
    @foreach($article->tags as $tag)
      <h5 class = "col-md-1">{{ $tag->name }}</h5>
    @endforeach
</div>
@endunless
