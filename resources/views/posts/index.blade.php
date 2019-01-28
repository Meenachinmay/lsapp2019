@extends('layouts.app')

@section('content')
    @if (count($posts) > 0)
        @foreach ($posts as $item)
            <div class="card">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <img style= "widht: 100%;" src="/storage/cover_images/{{$item->cover_image}}" class="card-img-top mt-1 ml-1" alt="...">
                    </div>
                </div>
                <div class="card-body" id="cardposts">
                    <h3><a href="posts/{{$item->id}}">{{$item->title}}</a></h3>
                    <small>Written On {{$item->created_at}} by <strong>{{$item->user->name}}</strong></small>
                </div>
            </div>
            <br>
            {{$posts->links()}}
        @endforeach
    @else
        <p>No posts found!!!</p>
    @endif
@endsection