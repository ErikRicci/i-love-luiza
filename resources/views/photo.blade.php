@extends('layouts.app')

@section('title', 'Fotinha')

@section('content')

<style>
    html, body {
        max-width: 100%;
        overflow-x: hidden;
    }

    #try {
        position: relative;
        animation-name: teamo;
        animation-duration: 12s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    @keyframes teamo {
        0% {
            left:-100%; top:0%;
        }
        100% {
            left:100%; top:0%;
        }
    }
</style>

<center>
    <h1 id="try">
        EU TE AMO LU MUITO MUITO
    </h1>
    <img style="border: 5px solid white; border-radius: 12px; max-height: 600px" src="{{$photo->url}}" class="img-fluid" alt="você perdeu uma baita foto :c">
</center>

@endsection
