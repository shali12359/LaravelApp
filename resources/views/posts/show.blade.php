@extends('layouts.app')

@section('content')
    <a href="/lApp/public/posts" class="btn btn-primary mb-4">Go back</a><br>
    <h1>{{$post->title}}</h1>
    <div>{{$post->body}}</div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection
