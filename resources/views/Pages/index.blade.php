@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
    <!-- Get app name from .env --> 
    <h1>{{config('app.name', 'LApp')}} -{{$title}}</h1> {{-- Value from controller --}}
    <p>Welcome to Laravel.</p>
    <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/register" role="button" class="btn btn-success btn-lg">Register</a></p>
@endsection   
