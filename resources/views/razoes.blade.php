@extends('layouts.app')

@section('title', 'Razões')

@section('content')
    <center>
        <div style="width: 80vw; margin-top: 5vh; background:rgb(173, 226, 214); padding: 12px; border-radius: 12px">
            @foreach ($reasons as $reason)
            <div class="card text-center">
                <div class="card-header">
                Featured
                </div>
                <div class="card-body">
                <h5 class="card-title">Razão {{$reason->id}}</h5>
                <p class="card-text">{{$reason->reason}}</p>
                <a href="#" class="btn btn-secondary disabled" disabled>LINK INDISPONÍVEL</a>
                </div>
                <div class="card-footer text-muted">
                {{date('d/m/Y', strtotime($reason->ts))}}
                </div>
            </div>
                <br>
            @endforeach
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
            @if ($reasons->currentPage() != 1)
                <li class="page-item"><a class="page-link" href="?page={{$reasons->currentPage() - 1}}">Anterior</a></li>
            @endif
            @if ($reasons->currentPage() != $reasons->lastPage())
                <li class="page-item"><a class="page-link" href="?page={{$reasons->currentPage() + 1}}">Próxima</a></li>
            @endif
            </ul>
        </nav>
        </div>
    </center>
@endsection
