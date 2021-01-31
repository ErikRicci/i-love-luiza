@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')

<center>
    <label style="font-size: 1rem">
        EU AMO UMA MULHER! <br> O NOME DELA?
    </label>
    <h1 style="font-family: Arial, Helvetica, sans-serif">
        <b>LUIZA 💖💖💖</b>
    </h1>

    @foreach ($posts as $post)
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img class="img-thumbnail" src="{{url('thum.png')}}" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        {{-- TITULO DA POSTAGEM --}}
                        <h5 class="card-title">
                            {{$post->title}}
                        </h5>
                        {{-- TEXTO DA POSTAGEM (RESUMIDO) --}}
                        <p class="card-text text-start">
                            {{substr($post->post_text, 0, 160)}} ...
                        </p>
                        <a style="width: 100%" class="btn btn-outline-primary text-center" href="{{route('post/{id}', ['id' => $post->id])}}">
                            ler mais
                        </a>
                        <hr>
                        <p class="card-text">
                            <small class="text-muted">
                                Data de Postagem: {{date('d/m/Y', strtotime($post->created_at))}}
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</center>

@endsection
