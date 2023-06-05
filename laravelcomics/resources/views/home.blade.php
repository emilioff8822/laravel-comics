@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="min-vh-100 py-5 d-flex flex-column justify-content-center">
                    <div class="logo_laravel">

                    </div>
                    <h1 class="display-5 fw-bold">
                        HOME
                    </h1>
                    @include('partials.header')


                    <p class="col-md-8 fs-4">This a preset package with Bootstrap 5 views for laravel projects
                        including laravel breeze/blade. It works from laravel 9.x to the latest release 10.x</p>
                    <a href="https://packagist.org/packages/pacificdev/laravel_9_preset" class="btn btn-primary btn-lg"
                        type="button">Documentation</a>
                </div>
            </div>
        </div>

    </div>
@endsection
