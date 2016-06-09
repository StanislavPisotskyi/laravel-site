@extends('main')
@section('title', ' - All Categories')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="well">
                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}

                <h2>New Category:</h2>
                {{ Form::label('name', 'Name:') }}
                {{ Form::text('name' , null, ['class' => 'form-control', 'style' => 'margin: 0 0 20px 0;']) }}

                {{ Form::submit('Create', ['class' => 'btn btn-success btn-block']) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $categories->links() !!}
            </div>
        </div>
    </div>
@endsection
