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
            </div>
        </div>
    </main>
@endsection
