@extends('layouts.admin')

@section('title','Post')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Post</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            @include('includes.msg')

            {!! Form::open(['method' => 'POST','action' => 'AdminPostsController@store','class' => 'form-horizontal','files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:', ['class' => 'col-md-2 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::text('title',null,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Category:', ['class' => 'col-md-2 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::select('category_id', array(1=>'PHP', 2=>'JAVA') , null,['class' => 'form-control']) !!}
                </div>
            </div>


            <div class="form-group">
                {!! Form::label('photo_id', 'Upload Image', ['class' => 'col-md-2 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::file('photo_id',null,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Description:', ['class' => 'col-md-2 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::textarea('body',null,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::submit('Create Post',['class' => 'fa fa-btn fa-sign-in btn btn-primary']) !!}
                </div>
            </div>

            {!! Form::close() !!}



        </div>
    </div>
@stop