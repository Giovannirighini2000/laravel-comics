<style lang="scss">
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
    </style>
@extends('layout.app')

    @section('content')
    <div class="container-img-jumbo">
        <img class="jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
        
    @endsection
