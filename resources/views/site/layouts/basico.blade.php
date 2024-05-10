<!DOCTYPE html>

<html lang="en">

<head>
    <!-- yield se refere a um campo que vem por um parametro de controller -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Gestão - @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
</head>

<body>
    <!-- inclusão do arquivo topo -->
    @include('site.layouts._partials.topo')
    
    <!-- aqui depende da view que foi chamada -->
    @yield('conteudo')
    
</body>

</html>