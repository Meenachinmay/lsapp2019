@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="card" id="postmedia">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img style= "widht: 100%;" src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top ml-1 mt-1" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="mt-1 ml-2"><a href="posts/{{$post->id}}">{{$post->title}}</a></h4>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'        => 'POST', 'class' => 'float-right mt-1 mr-2'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
                                {!!Form::close()!!}
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm   float-right mt-1 mr-2">Edit</a>
                             
                            <!--<p class="mt-1 ml-2">{!!$post->body!!}</p>-->
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
