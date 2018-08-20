@extends('layouts.app')

@section('content')
    <br>
    <h3>Create Post</h3>
    <br>
    <br>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
    
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body'])}}
    </div>

    <div class="custom-file">
        {{Form::file('cover_image', ['class'=>'custom-file-input', 'id'=>'customFile'])}}
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>

    <br><br>

    {{Form::submit('Submit', ['class' => 'btn btn-primary btn-lg'])}}

    {!! Form::close() !!}

@endsection