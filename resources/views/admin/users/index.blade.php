@extends('layouts.admin')

@section('title','User')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All Users</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
          <table class="table table-condensed table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
              </tr>
            </thead>
            <tbody>

            @if($users->count() > 0)
              @foreach($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
               <td>{{ $user->role->name }}</td>
                <td>{{ $user->is_active==1 ? 'Active' : 'No Active' }}</td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
                <td>{{ $user->updated_at->diffForHumans() }}</td>
              </tr>
              @endforeach
            @endif
            </tbody>
          </table>
        </div>
    </div>
@endsection