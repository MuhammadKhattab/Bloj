@extends('layouts/app')

@section('content')
  <div class="container">

    @if (count($users) === 0)
      <h3>No users yet... that's even cooler</h3>
    @else
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th># Artciles</th>
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

  </div>
@endsection
