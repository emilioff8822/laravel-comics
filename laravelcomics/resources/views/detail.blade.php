@extends('main')

@section('content')
    <main class="bg-light">
        <div class="detail-container">
            <div class="card-detail-style">
                <div class="card-img-container-detail-style">
                    <img src="{{ $detailData['thumb'] }}" alt="{{ $detailData['series'] }}">
                </div>
                <p>{{ $detailData['price'] }}</p>
                <p>{{ $detailData['series'] }}</p>
                <p>{{ $detailData['type'] }}</p>
                <a href="{{ route('home') }}" class="btn btn-primary">Torna</a>
            </div>
        </div>
    </main>
@endsection
