@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-info" href="/posts/create">Create Post</a>
                    <br>
                    <br>
                    @if(count($posts) > 0)
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                                <tr>
                                    <td><h4>{{$post->title}}</h4></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right', 'style'=>'padding-left:150px;'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete Post', ['class' => 'btn btn-outline-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>                          
                        @endforeach
                        </tbody>  
                    </table>
                    @else
                        <p>There are no posts for this user.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
