@extends('main')
@section('title', " - $post->title")

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <p><img src="{{ asset($post->image) }}"  width="700" height="500"/></p>
            <p>{{ $post->body }}</p>
            <p><span style="color: #2ca02c; font-weight: bold;">Category: </span>{{ $post->category->name }}</p>
        </div>
    </div>
@endsection