@extends('main')
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome to My Blog!</h1>
                    <p class="lead">Thnk you so much for visiting!</p>
                    <p><a class="btn btn-success btn-lg" href="#" role="button">Popular Posts</a></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-success">Read More...</a>
                    </div>
                    <hr>
                @endforeach
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
    @endsection

