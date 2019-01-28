@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="card" id="postmedia">
                        <div class="card-body">
                            <h4 class="mt-1 ml-2">{{$post->title}}
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'        => 'POST', 'class' => 'float-right mt-1 mr-2'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
                                {!!Form::close()!!}
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm   float-right mt-1 mr-2">Edit</a>
                            </h4> 
                            <hr>
                            <p class="mt-1 ml-2">{!!$post->body!!}</p>
                            <hr>
                        <small>Written On {{$post->created_at}} by <strong>{{$post->user->name}}</strong></small>
                        </div>
                    </div>
                @endforeach
            @else
                <h1 class="text-center mt-1">No Posts Found!!!</h1>
            @endif
        </div>
    </div>
</div>
@endsection
