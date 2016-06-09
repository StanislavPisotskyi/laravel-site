@extends('main')
@section('title', ' - Register')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'style' => 'margin: 0 0 20px 0;']) }}

            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email', null, ['class' => 'form-control', 'style' => 'margin: 0 0 20px 0;']) }}

            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control', 'style' => 'margin: 0 0 20px 0;']) }}

            {{ Form::label('password_confirmation', 'Confirm Password:') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'style' => 'margin: 0 0 20px 0;']) }}

            {{ Form::submit('Register', ['class' => 'btn btn-success btn-block', 'style' => 'margin: 20px 0 0 0;']) }}

            {!! Form::close() !!}
        </div>
    </div>
@endsection