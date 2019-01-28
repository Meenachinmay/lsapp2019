@extends('layouts.app')

@section('content')
    <h1 id="EachPost">{{$post->title}}</h1>
    <br>
    <div class="row">
            <div class="col-md-4 col-sm-4">
                <img style= "widht: 100%;" src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" alt="...">
            </div>
        </div>
    <div>
    <br>
    {!!$post->body!!}
    </div>
    <hr>
    <small>Writtne On {{$post->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> 
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
            {!!Form::close()!!}
        @endif
    @endif
    <a href="/posts" class="btn btn-primary">Go Back</a>
@endsection