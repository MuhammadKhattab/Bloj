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
                  <th>Tools</th>
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
                    <div class = "col-md-1">
                      {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
                        <button type="submit" class="btn btn-danger">
                          <i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                      {!! Form::close() !!}
                    </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    @endif

    @if (count($tags) === 0)
      <h3>No tags yet... that's even kooler</h3>
    @else
      <h4 id = "admin-tags">Tags:</h4>
      <table class="table table-hover">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Artciles #</th>
                  <th>Tools</th>
              </tr>
          </thead>
          <tbody>
              @foreach($tags as $tag)
              <tr>
                  <td>{{ $tag->name }}</td>
                  <td>{{ count($tag->articles) }}</td>
                  <td>
                    <div class = "col-md-1">
                      <button type="submit" class="btn btn-primary" id = "edit-tag-btn-{{ $tag->id }}"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>
                    </div>
                    <div id="edit-tag-content-{{ $tag->id }}" class="hide">
                      {!! Form::open(['method' => 'PATCH', 'action' =>['TagsController@update', $tag->id], 'class' => 'form-inline']) !!}
                        <div class="form-group">
                          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter tag name', 'required']) !!}
                          {!! Form::submit('Submit', ['class' => 'btn-primary form-control']) !!}
                        </div>
                      {!! Form::close() !!}
                    </div>

                    <div class = "col-md-1 col-md-offset-1">
                      {!! Form::open(['method' => 'DELETE', 'route' => ['tags.destroy', $tag->id]]) !!}
                      <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                      {!! Form::close() !!}
                    </div>
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
      {!! Form::open(['url' => 'tags', 'class' => 'form-inline']) !!}
        <div class="form-group">
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter tag name', 'required']) !!}
          {!! Form::submit('Submit', ['class' => 'btn-success form-control']) !!}
        </div>
      {!! Form::close() !!}
    </div>

  </div>

  <!-- create, edit tags -->
  <script src={{ url("js/libs/jquery.min.js")}}></script>
  <script>
    $(document).ready( function() {

      var tags = <?php echo json_encode($tags->lists('id')); ?>;
      for(var id in tags) {
        $('#edit-tag-btn-'+tags[id]).popover({
            html : true,
            content: function() {
              return $("#edit-tag-content-"+tags[id]).html();
            }
        });
      }

      $('#create-tag-btn').popover({
          html : true,
          content: function() {
            return $("#create-tag-content").html();
          }
      });

    });
  </script>
@endsection
