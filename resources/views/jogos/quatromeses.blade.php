@extends('layouts.game')

@section('title', 'Quatro Meses')
@section('gametitle', 'Quatro Meses')

@section('content')

<style>
    #bgimg {
        position: absolute;
        left: 0px;
        top: 0px;
        z-index: -1;
        width: 100vw;
        filter: blur(3px);
        -webkit-filter: blur(3px);width: 100%;
        -webkit-mask-image: linear-gradient(to top, transparent 25%, black 100%);
    }
</style>

<center>
    <img id="bgimg" src="{{asset('bg.png')}}" alt="...">
    <iframe style="max-width: 90vw; margin-top: 10px" frameborder="0" src="https://itch.io/embed-upload/2189082?color=333333" allowfullscreen="" width="720" height="500">
        <a href="https://riccioppo.itch.io/luiza-maravigata">
            Play 4 Meses Não É Pouco on itch.io
        </a>
    </iframe>
</center>

@endsection
