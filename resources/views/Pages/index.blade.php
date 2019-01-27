@extends('layouts.app')


@section('content')
    <div class="jumbotron text-center" id="homePageJumbotron">
        <h1>{{$title}}</h1>
        <p>This is Home page!!!</p>
        <p> 
            <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
        </p>
    </div>
@endsection