@extends('layouts.app')

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

<center style="background: white; padding-bottom: 10px">
    <img id="bgimg" src="{{asset('hearts.png')}}" alt="...">

    <figure class="text-start p-3">
        <blockquote class="blockquote">
            <h1>{{$post->title}}</h1>
        </blockquote>
        <figcaption class="blockquote-footer">
            {{$post->posted_by}} em <cite title="Source Title">{{$post->created_at}}</cite>
        </figcaption>
    </figure>

    <div class="container row">
        <p class="col-sm-8 text-start">
            {{$post->post_text}}
        </p>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Siga a gente em nossas redes sociais
                    </h5>
                    <hr>
                    <p class="card-text text-primary">
                        ELE:
                    </p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="https://www.facebook.com/erik.riccioppo" class="btn btn-outline-primary">
                            <img style="width: 16px" src="{{asset('facebook.png')}}" alt="..."> Face
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=5519982492037&text=Salve%2C%20Erik" class="btn btn-outline-success">
                            <img style="width: 16px" src="{{asset('whatsapp.png')}}" alt="..."> Wpp
                        </a>
                    </div>
                    <hr>
                    <p class="card-text text-danger">
                        ELA:
                    </p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="https://www.facebook.com/LuizaP.Merino" class="btn btn-outline-primary">
                            <img style="width: 16px" src="{{asset('facebook.png')}}" alt="..."> Face
                        </a>
                        <a href="{{ route('404') }}" class="btn btn-outline-success">
                            <img style="width: 16px" src="{{asset('whatsapp.png')}}" alt="..."> Wpp
                        </a>
                    </div>
                    <hr>
                    <div class="card">
                        <h4 class="card-title">
                            Mande um email pra gente
                        </h4>
                        <div class="card-text">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>

@endsection
