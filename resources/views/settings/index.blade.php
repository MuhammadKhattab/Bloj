@extends('layouts/app')

@section('content')
  <div class="container">

    {!! Form::open(['url' => 'settings/edit_name']) !!}
      <div class = "form-horizontal">

        <div class="form-group">
          <div class = "control-label col-md-2">
            {!! Form::label('name','Name:') !!}
          </div>
         <div class = "col-md-10">
           {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your name', 'required']) !!}
          </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-2">
              {!! Form::submit('Edit the name',['class' => 'btn-danger form-control']) !!}
          </div>
        </div>

      </div>
    {!! Form::close() !!}

    <hr>

    {!! Form::open(['url' => 'settings/edit_password']) !!}
      <div class = "form-horizontal">

      <div class="form-group">
        <div class = "control-label col-md-2">
          {!! Form::label('oldPassword','Old password:') !!}
        </div>
       <div class = "col-md-10">
         {!! Form::password('oldPassword', ['class' => 'form-control', 'placeholder' => 'old password', 'required']) !!}
        </div>
      </div>

      <div class="form-group">
        <div class = "control-label col-md-2">
          {!! Form::label('newPassword','New password:') !!}
        </div>
       <div class = "col-md-10">
         {!! Form::password('newPassword', ['class' => 'form-control', 'placeholder' => 'new password', 'required']) !!}
        </div>
      </div>

      @if ($errors->has('newPassword'))
        <div class="row">
          <span class="col-md-4 col-md-offset-2">
            <h6 class="alert alert-danger">{{ $errors->first('newPassword') }}</h6>
          </span>
        </div>
      @endif

      <div class="form-group">
        <div class = "control-label col-md-2">
          {!! Form::label('newPassword_confirmation','Confirm new password:') !!}
        </div>
         <div class = "col-md-10">
           {!! Form::password('newPassword_confirmation', ['class' => 'form-control', 'placeholder' => 'new password', 'required']) !!}
         </div>
      </div>

      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-2">
            {!! Form::submit('Change password',['class' => 'btn-danger form-control']) !!}
        </div>
      </div>

    </div>
    {!! Form::close() !!}

  </div>
@endsection
