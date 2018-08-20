@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    <br>
    <br>

    @if (count($posts) > 0)

        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <img style="width:100%;" src="storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="card-title">
                                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                            </h4>
                            <p class="card-text">Creat la: {{$post->created_at}} by {{$post->user->name}}</p>                            
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
        {{$posts->links()}}
    @else
        <p>There are no posts in the database.</p>
    @endif

@endsection