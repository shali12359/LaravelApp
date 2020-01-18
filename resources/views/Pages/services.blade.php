@extends('layouts.app')

@section('content')
    <!-- Get app name from .env -->
    <h1>This Services Section</h1>
    <p>{{$title}}</p>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif        
@endsection