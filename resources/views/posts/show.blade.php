@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <h1 id="EachPost">{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
<small>Writtne On {{$post->created_at}}</small>
@endsection