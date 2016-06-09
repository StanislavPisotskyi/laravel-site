@extends('main')
@section('title', ' - All Posts')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts:</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-success btn-lg btn-block btn-spacing">Create New Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Created At</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <th>{{ $post->title }}</th>
                            <th>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? "..." : "" }}</th>
                            <th>{{ date('j M Y H:i', strtotime($post->created_at)) }}</th>
                            <th><a href="{{ route('posts.show', $post->id) }}" class="btn btn-success">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection