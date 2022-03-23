<!DOCTYPE html>
<html lang="pt_br">
<head>
    @push('css')
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/default.css">
    @endpush
    @include("includes.head")
    @yield('css')
</head>
<body>
    <div class="container">

       <header class="header">

        @include("includes.Header")

       </header>

       <div class="main">

        @yield('content')

       </div>

    </div>
    <img class="baseboard" src="logos/rodape.png" alt="baseboard">
</body>
</html>