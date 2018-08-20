@extends('layouts.app')

@section('content')
    <br>
    <h3>Edit Post</h3>
    <br>
    <br>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
    
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body'])}}
    </div>
    <div class="custom-file">
        {{Form::file('cover_image', ['class'=>'custom-file-input', 'id'=>'customFile'])}}
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>

    <br><br>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary btn-lg'])}}

    {!! Form::close() !!}

@endsection