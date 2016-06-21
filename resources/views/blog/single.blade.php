@extends('main')
@section('title', " - $post->title")

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <h3><b>Author: </b>{{ $post->users->name }}</h3>
            <p><img src="{{ asset($post->image) }}"  width="700" height="500"/></p>
            <p>{{ $post->body }}</p>
            <p><span style="color: #2ca02c; font-weight: bold;">Category: </span>{{ $post->category->name }}</p>
            <p><b>Comments: </b>{{ $post->comments_counter }}</p>
            <hr>
        </div>
    </div>
    <div class="row">
        @foreach($comments as $comment)
            <div class="col-md-8 col-md-offset-2">
                <p><b>Author: </b>{{ $comment->users->name }}</p>
                <p>{{ $comment->body }}</p>
                <p><b>Created At: </b>{{ $comment->created_at }}</p>
                <p><b>Updated At: </b>{{ $comment->updated_at }}</p>
                @if($comment->user_id == Auth::user()->id)
                    <div>
                        {!! Html::linkRoute('comments.edit', 'Edit', array($comment->id), array('class' => 'btn btn-warning', 'style' => 'float: left; margin: 0 20px 0 0 ;')) !!}
                    </div>
                    <div>
                        {!! Form::open(['route' => ['comments.destroy', $comment->id], "method" => "DELETE"]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                @endif
                <hr>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(array('route' => 'comments.store', 'data-parsley-validate' => '')) !!}

            {{ Form::label('body', 'Type Your Comment:') }}
            {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

            {{ Form::hidden('user_id', Auth::user()->id) }}

            {{ Form::hidden('post_id', $post->id) }}

            {{ Form::hidden('post_slug', $post->slug) }}

            {{ Form::submit('Create New Comment', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

            {!! Form::close() !!}
        </div>
    </div>
@endsection