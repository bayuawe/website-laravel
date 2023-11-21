@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Your Website</h1>
        <p class="lead">This is a simple starting point using Bootstrap in Laravel.</p>
        <hr class="my-4">
        <p>Learn more about Laravel and Bootstrap to build amazing web applications.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card 1</h5>
                    <p class="card-text">Some text for Card 1.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card 2</h5>
                    <p class="card-text">Some text for Card 2.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
