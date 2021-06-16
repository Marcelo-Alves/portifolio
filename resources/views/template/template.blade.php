<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">
</head>
<body>


<div class="topo">

    <li>
        <ul> <a href="/">Home</a></ul>
        <ul> <a href="/noticia">Notícias</a></ul>
        <ul><a href="/quem">Quem sou</a></ul>
        <ul> <a href="/contato">Contato</a></ul>        
    </li>
</div>
<div class="conteudo">
    @yield('conteudo')
</div>
 <div class="rodape">
    <H1>RODAPE</H1>
 </div>   
</body>
</html>