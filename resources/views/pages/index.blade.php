@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Laravel Blog</h1>
        <p>This is blog built using Laravel PHP Framework</p>
        @guest
            <p>Please login or register</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endguest
    </div>
@endsection
