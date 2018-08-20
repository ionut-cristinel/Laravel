@extends('layouts.app')

@section('content')
    <br>
    <br>
    <a href="/posts" class="btn btn-outline-dark">Go Back</a>
    <br>
    <br>
    <h3>{{$post->title}}</h3>
    <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}">
    <div>
        <p>{!!$post->body!!}</p>
    </div>
    <hr>
    <i>Creat la: {{$post->created_at}} by {{$post->user->name}}</i>
    <br>

    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <br>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info" style="float:left;">Edit Post</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right', 'style'=>'padding-left:150px;'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete Post', ['class' => 'btn btn-outline-danger'])}}
            {!!Form::close()!!} 
        @endif       
    @endif

@endsection