@extends('layouts.admin')

@section('title','User')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit User</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
        @include('includes.form_error')
        </div>

        <div class="col-lg-3">
            <img src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400X400' }}" alt="" class="img-responsive img-rounded">

        </div>
        <div class="col-lg-9">
           {!! Form::model($user, ['method' => 'PATCH','action' => ['AdminUsersController@update',$user->id],'class' => 'form-horizontal','files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:', ['class' => 'col-md-2 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::text('name',null,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::email('email',null,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role:', ['class' => 'col-md-2 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::select('role_id', $roles , null,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status:', ['class' => 'col-md-2 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::select('is_active',array(1=>'active',0=>'Not active'), null ,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Upload Image', ['class' => 'col-md-2 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::file('photo_id',null,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:', ['class' => 'col-md-2 control-label']) !!}
                <div class="col-md-8">
                    {!! Form::password ('password',['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::submit('Update User',['class' => 'fa fa-btn fa-sign-in btn btn-primary']) !!}
                </div>
            </div>

            {!! Form::close() !!}



        </div>
    </div>
@stop