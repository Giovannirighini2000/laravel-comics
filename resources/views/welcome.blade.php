<style>
    .container-img-jumbo {
        height: 450px;
        overflow: hidden;
    }
    
    .jumbo {
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: center top;
    }
    .size-img-card{
        flex-wrap: wrap;
        gap: 24px;
        
    }
    .img-card{
        height: 225px;
        width: 200px;
    }
    .item-card{
        flex-basis: 15%;
    }
    .back{
        background-color: black;
    }
    .button-series {
    position: absolute;
    z-index: 1;
    margin-top: -20px;
    margin-left: -20px;
    padding: 15px 25px;
    background-color: #0282f9;
    color: white;
    border: none;
    font-size: 16px;
    font-weight: bold;
    }

    .place-button {
        padding-bottom: 50px;
    }

    .button-load {
        max-width: 300px;
        margin: 0 auto;
        padding: 40px 10px;
    }

    .button-load-style {
        padding: 8px 30px;
        background-color: #0282f9;
        color: white;
        border: none;
    }
    </style>
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
