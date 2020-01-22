@extends('layouts.app')

@section('content')
    <a href="/lApp/public/posts" class="btn btn-primary mb-4">Go back</a><br>
    <h1>{{$post->title}}</h1>
    <div>{{$post->body}}</div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    {{-- Hide for unregistered users --}}
    @if (!Auth::guest())
        {{-- Disable editing others user posts --}}
        @if (Auth::user()->id == $post->user_id)
            <a href="{{$post->id}}/edit" class="btn btn-success">Edit</a>

            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}     
        @endif   
    @endif
@endsection
