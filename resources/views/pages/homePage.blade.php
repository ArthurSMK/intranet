@extends('layouts.default')

{{-- @push('css')
    <link rel="stylesheet" href="css/default.css">
@endpush --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="css/gallery.min.css">
@endsection

@section('content')
    <div class=container-home>
        <div class=container-categorias>
            <div class="rh">
                <h2 class="subtitulo">Informativos do RH</h2>
                <div class=pdf-rh>
                    <p class=text-rh><a href="#">Informativo</a></p>
                    <p class=text-rh><a href="#">Ferias UHUUU</a></p>
                    <p class=text-rh><a href="#">Socorro alguém me ajuda</a></p>
                </div>
            </div>

            <h2 class="subtitulo">Aniversariantes do mês</h2>
            <div class=aniversarios>
                <div class=box-niver>
                    <p class=text-rh>Nome <br>Data</p>
                </div>
                <div class=box-niver>
                    <p class=text-rh>Nome <br>Data</p>
                </div>
                <div class=box-niver>
                    <p class=text-rh>Nome <br>Data</p>
                </div>
                <div class=box-niver>
                    <p class=text-rh>Nome <br>Data</p>
                </div>
            </div>
        </div>
    </div>
@endsection