@extends('layouts.admin')

@section('title','Post')

@section('content')
    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">All Post</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        @include('includes.msg')

        <div class="col-lg-12">
            <table class="table table-condensed table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Owner</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>

                @if($posts)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td> <img height="50" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/200X200' }}" alt="" >
                            </td>
                            <td>{{ $post->user ? $post->user->name : 'No User Name' }}</td>
                            <td>{{ $post->category_id ? $post->category_id : 'No Post Category' }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>{{ $post->created_at->diffForHumans() }}</td>
                            <td>{{ $post->updated_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection