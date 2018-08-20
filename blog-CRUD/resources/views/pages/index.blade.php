
@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome !!</h1> 
        <p>This is a Laravel project.</p>
        <p>
            <a href="/login" class="btn btn-primary" role="button">Login</a>
            <a href="/register" class="btn btn-success" role="button">Register</a>
        </p>
    </div>
@endsection
