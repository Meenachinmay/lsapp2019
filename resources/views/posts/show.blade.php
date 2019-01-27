@extends('layouts.app')

@section('content')
    <h1 id="EachPost">{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Writtne On {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> 
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
    {!!Form::close()!!}
    <span></span>
    <a href="/posts" class="btn btn-primary">Go Back</a>
@endsection