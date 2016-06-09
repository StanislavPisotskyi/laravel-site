@extends('main')
@section('title', ' - Forgot Password')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'password/email', 'method' => 'POST']) !!}

                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Form::label('email', 'Email Address:') }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'style' => 'margin: 0 0 20px 0;']) }}

                    {{ Form::submit('Reset Password', ['class' => 'btn btn-success btn-block']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection