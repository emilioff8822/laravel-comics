@extends('main')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <img class="logo" src="/img/jumbotron.jpg" alt="logo">
        </div>
        <div class="card-container">
            <div class="current-series">
                CURRENT SERIES
            </div>
            <Card v-for="card in cards" :key="card.thumb" :thumb="card.thumb" :price="card.price"
                :series="card.series" :type="card.type" />
            <button class="load-more">LOAD MORE</button>
        </div>
    </div>
@endsection
