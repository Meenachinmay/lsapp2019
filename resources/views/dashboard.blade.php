@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="media" id="postmedia">
                        <div class="media-body">
                            <h3 class="mt-1 ml-2">{{$post->title}}
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm   float-right mt-1 mr-2">Edit</a>
                            </h3> 
                            <hr>
                            <p class="ml-2">{!!$post->body!!}</p>
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
