@if($article->tags->isEmpty())
  <h5>No tags</h5>
@else
  <h5>Tags:</h5>
  <div class = "row">
    @foreach($article->tags as $tag)
      <h5 class = "col-md-2 col-sm-3 col-xs-3 well well-sm">{{ $tag->name }}</h5>
    @endforeach
  </div>
@endunless
