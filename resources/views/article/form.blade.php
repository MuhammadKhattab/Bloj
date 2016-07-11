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
      {!! Form::label('tags','Tags:') !!}
    </div>
    <div class = "col-md-11">
      {!! Form::select('tags',['default'], null, ['class' => 'form-control', 'multiple']) !!}
    </div>
  </div>

  <div class="form-group">
      <div class="col-sm-offset-1 col-sm-2">
        {!! Form::submit($submitButtonText,['class' => 'btn-danger form-control']) !!}
    </div>
  </div>

</div>
