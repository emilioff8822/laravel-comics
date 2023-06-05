@extends('main')

@section('content')
    <main class="bg-light">
        <div class="container">
            <div class="jumbotron">
                <img class="logo" src="/img/jumbotron.jpg" alt="logo">
            </div>
            <div class="card-container">
                <div class="current-series">
                    CURRENT SERIES
                </div>

                @foreach ($datax['cardsData'] as $card)
                    <div class="card">
                        <div class="card-img-container">
                            <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                        </div>
                        <p>{{ $card['price'] }}</p>
                        <p>{{ $card['series'] }}</p>
                        <p>{{ $card['type'] }}</p>
                    </div>
                @endforeach

                <button class="load-more">LOAD MORE</button>
            </div>
        </div>
    </main>
@endsection
