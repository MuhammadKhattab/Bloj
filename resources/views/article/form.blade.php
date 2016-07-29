<div class = "form-horizontal">

  <div class="form-group">
    <div class = "control-label col-md-1">
      {!! Form::label('title','Title:') !!}
    </div>
   <div class = "col-md-11">
     {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter a name for the article']) !!}
    </div>
  </div>

  <div class="form-group">
    <div class = "col-md-1 control-label">
      {!! Form::label('body','Body:') !!}
    </div>
    <div class = "col-md-11">
      {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Write down your content']) !!}
    </div>
  </div>

  <div class="form-group">
    <div class = "col-md-1 control-label">
      {!! Form::label('excerpt','Excerpt:') !!}
    </div>
    <div class = "col-md-11">
      {!! Form::text('excerpt', null, ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'Write an excerpt for the article']) !!}
    </div>
  </div>

  <div class="form-group">
    <div class = "col-md-1 control-label">
      {!! Form::label('tag_list','Tags:') !!}
    </div>
    <div class = "col-md-11">
      {!! Form::select('tag_list[]', $tags, null, ['id'=>'tag_list', 'class' => 'form-control', 'multiple']) !!}
    </div>
  </div>

  <h5>Click th button</h5>
  <div class="form-group">
      <div class="col-sm-offset-1 col-sm-2">
        {!! Form::submit($submitButtonText,['class' => 'btn-danger form-control']) !!}
    </div>
  </div>

  <h5>Or just sign</h5>
  <div class = "row">

    <div class = "col-md-3">
      <div id="draggable" class="ui-widget-content">
        <img src= {{ url("img/pen.png")}} alt="pen">
      </div>
    </div>

    <div class = "col-md-3">
      <div id="droppable-submit" class="ui-widget-header">
        <img src= {{ url("img/paper.png")}} alt="paper">
      </div>
    </div>

  </div>

</div>
