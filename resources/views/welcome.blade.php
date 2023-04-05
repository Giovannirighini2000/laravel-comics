
@extends('layout.app')

    @section('content')
    <div class="container-img-jumbo">
        <img class="jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
    <div class="back">
        <div class="container">
            <div class="place-button">
                <button class="button-series">
                    CURRENT SERIES
                </button>
            </div>
            <ul class="flex size-img-card">
            @foreach ($movies as $movie)

                <li class="item-card">
                    <img  class="img-card" src="{{ $movie['thumb'] }}" alt="">
                    <h3>{{ $movie['title'] }}</h3>
                </li>

            @endforeach
            <div class="flex button-load">
                <button class="button-load-style">
                    LOAD MORE
                </button>

            </div>
        
        </div>
    </div>
         
@endsection
