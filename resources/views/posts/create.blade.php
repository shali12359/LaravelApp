@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/data']) !!}
      <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
      </div>
      <div class="form-group">
        {{Form::file('cover-image')}}
      </div>
      {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
