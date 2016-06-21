@extends('main')
@section('title', ' - Edit Comment')

@section('content')
    <div class="row">
        {!! Form::model($comment, ['route' => ['comments.update', $comment->id], "method" => "PUT"]) !!}
        <div class="col-md-8">

            {{ Form::textarea('body', null, ['class' => 'form-control']) }}

        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('j M Y H:i', strtotime($comment->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('j M Y H:i', strtotime($comment->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection