<div class = "form-horizontal">

  <div class="form-group">
    <div class = "control-label col-md-1">
      {!! Form::label('title','Title:') !!}
    </div>
   <div class = "col-md-11">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
  </div>

  <div class="form-group">
    <div class = "col-md-1 control-label">
      {!! Form::label('body','Body:') !!}
    </div>
    <div class = "col-md-11">
      {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
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

  <div class="form-group">
      <div class="col-sm-offset-1 col-sm-2">
        {!! Form::submit($submitButtonText,['class' => 'btn-danger form-control']) !!}
    </div>
  </div>

  <div class = "row">

    <div class = "col-md-3">
      <div id="draggable" class="ui-widget-content">
        <p>Drop me there!</p>
      </div>
    </div>

    <div class = "col-md-3">
      <div id="droppable" class="ui-widget-header">
        <p>There</p>
      </div>
    </div>

  </div>

</div>
