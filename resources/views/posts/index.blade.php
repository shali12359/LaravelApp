@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                  <h3 class="card-title"><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p class="card-text"><small>Written on {{$post->created_at}} by {{$post->user->name}}</small></p>
                </div>
            </div>
        @endforeach
        {{-- Pagination --}}
        {{$posts->links()}}
    @else
        <P>No Posts Found</P>
    @endif
@endsection
