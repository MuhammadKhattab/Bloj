@extends('layouts/app')

@section('content')
  <div class="container">

    @if($errors->has('name'))
      <h6 class="alert alert-danger">{{ $errors->first('name') }}</h6>
    @endif

    @if (count($users) === 0)
      <h3>No users yet... that's even cooler</h3>
    @else
      <h4 id = "admin-users">Users:</h4>
      <table class="table table-hover">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Artciles #</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @foreach($users as $user)
              <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->role }}</td>
                  <td>{{ count($user->articles) }}</td>
                  <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
                      <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                    {!! Form::close() !!}
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    @endif

    <hr>

    @if (count($tags) === 0)
      <h3>No tags yet... that's even kooler</h3>
    @else
      <h4 id = "admin-tags">Tags:</h4>
      <table class="table table-hover">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Artciles #</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              @foreach($tags as $tag)
              <tr>
                  <td>{{ $tag->name }}</td>
                  <td>{{ count($tag->articles) }}</td>
                  <td>
                    {!! Form::model($tag, ['method' => 'PATCH', 'url' => ['tags', $tag->id]]) !!}
                      <div class="form-group">
                        <div class="col-md-4">
                          {!! Form::text('name', null, ['class' => 'form-control col-md-2', 'placeholder' => 'Enter tag...', 'required']) !!}
                        </div>
                        <div class="col-md-2">
                          {!! Form::submit('Edit Name', ['class' => 'btn-primary form-control']) !!}
                        </div>
                      </div>
                      {!! Form::close() !!}

                        {!! Form::open(['method' => 'DELETE', 'route' => ['tags.destroy', $tag->id]]) !!}
                          <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                        {!! Form::close() !!}
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    @endif

    <div class = "col-md-1">
      <button type="submit" class="btn btn-success" id = "create-tag-btn"><i class="fa fa-plus" aria-hidden="true"></i>New Tag</button>
    </div>
    <div id="create-tag-content" class="hide">
      {!! Form::open(['url' => 'tags']) !!}
        <div class="form-group">
          <div class="row">
            <div class="col-md-7">
              {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter tag...', 'required']) !!}
            </div>
            <div class="col-md-5">
              {!! Form::submit('Create', ['class' => 'btn-success form-control']) !!}
            </div>
          </div>
        </div>
      {!! Form::close() !!}
    </div>

  </div>
@endsection
