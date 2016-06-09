@extends('main')
@section('title', ' - Login')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email', null, ['class' => 'form-control', 'style' => 'margin: 0 0 20px 0;']) }}

            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control', 'style' => 'margin: 0 0 20px 0;']) }}

            {{ Form::checkbox('remember') }}{{ Form::label('remember', 'Remember Me') }}
            <br>

            {{ Form::submit('Login', ['class' => 'btn btn-success btn-block', 'style' => 'margin: 20px 0 20px 0;']) }}

            <p>
                <a href="{{ url('password/reset') }}">Forgot Password</a>
            </p>

            {!! Form::close() !!}
        </div>
    </div>
@endsection