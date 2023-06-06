@extends('main')

@section('content')
    <main class="bg-light">
        <div class="main-container">
            <div class="jumbotron-style">
                <img class="logo-style" src="/img/jumbotron.jpg" alt="logo">
            </div>
            <div class="card-container-style">
                <div class="current-series-style">
                    CURRENT SERIES
                </div>

                @foreach ($datax['cardsData'] as $key => $card)
                    <a href="{{ route('detail', ['id' => $key]) }}" class="card-link-style">
                        <div class="card-style">
                            <div class="card-img-container-style">
                                <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                            </div>
                            <p>{{ $card['price'] }}</p>
                            <p>{{ $card['series'] }}</p>
                            <p>{{ $card['type'] }}</p>
                        </div>
                    </a>
                @endforeach

                <button class="load-more-style">LOAD MORE</button>
            </div>
        </div>
    </main>
@endsection
