@extends('layouts.default')


{{-- @push('css')
    <link rel="stylesheet" href="css/default.css">
@endpush --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('css/ramais.css') }}">
@endsection

@section('content')
<div class=container-ramais>
    <div class=container-numeros>
        <div id="divBusca">
            <form action="" method="post">
                <tr id="pesquisa">
                    <td><input placeholder="Quer ligar para quem?" type="text" name=Buscar class=buscar></td>
                    <td><button type="submit" class=button>BUSCAR</button></td>
                </tr>
            </form>
        </div>

        <div class=lista>
            <h1 class=titulo>RAMAIS</h1>
            <h2 class=subtitulo id="controle-interno">Assessoria de Controle Interno</h2>
            <p class=text>Raimundo | 3215-3006 <br>Rosane | 3215-3006</p>
            <h2 class=subtitulo id="juridica">Assessoria Jurídica</h2>
            <p class=text>Gabriel | 3215-3007 <br> Kethleen | 3515-3063 <br> Isadora Oliveira | 3215-3063</p>
            <h2 class=subtitulo id="comunicação">Assessoria de Comunicação</h2>
            <p class=text>Marcelo | 3215-3002</p>
            <h2 class=subtitulo>Assessoria de Tecnologia da Informação</h2>
            <p class=text>Eluzaires | 3215-3008</p>
            <h2 class=subtitulo>Assessoria Gabinete</h2>
            <p class=text>Raimundo | 3215-3053</p>
            <h2 class=subtitulo>Assessoria de Controle Interno</h2>
            <p class=text>Raimundo | 3215-3006 <br>Rosane | 3215-3006</p>
            <h2 class=subtitulo>Assessoria de Controle Interno</h2>
            <p class=text>Raimundo | 3215-3006 <br>Rosane | 3215-3006</p>
            <h2 class=subtitulo>Assessoria de Controle Interno</h2>
            <p class=text>Raimundo | 3215-3006 <br>Rosane | 3215-3006</p>
            <h2 class=subtitulo>Assessoria de Controle Interno</h2>
            <p class=text>Raimundo | 3215-3006 <br>Rosane | 3215-3006</p>
            <h2 class=subtitulo>Assessoria de Controle Interno</h2>
            <p class=text>Raimundo | 3215-3006 <br>Rosane | 3215-3006</p>
            <h2 class=subtitulo>Assessoria de Controle Interno</h2>
            <p class=text>Raimundo | 3215-3006 <br>Rosane | 3215-3006</p>

        </div>
    </div>
@endsection