@extends('main')
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-img-container">
                <img src="{{ $card->thumb }}" alt="{{ $card->series }}">
            </div>
            <p>{{ $card->price }}</p>
            <p>{{ $card->series }}</p>
            <p>{{ $card->type }}</p>
        </div>
    @endsection
