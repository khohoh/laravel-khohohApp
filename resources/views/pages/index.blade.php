@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center mt-5">
        <h1>Welcome To khohohApp</h1>
        <p>We wish you all the best!</p>
        <p>
            @guest
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            @endguest
        </p>
    </div>
@endsection