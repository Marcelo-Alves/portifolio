<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Progrador PHP, CSS, HTML, Analista de Sistem, Analista Programador, Analista Desenvolvedor, Analista de dados">
    <meta name="author" content="Marcelo">
    <title>@yield('titulo')</title>
    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Estilos customizados para esse template -->
    <link rel="stylesheet" href="{{ asset('css/jumbotron.css') }}">
  </head>
  <body>    
    <div class="container">  
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="row" href="{{route('site.home')}}">
        <img src="{{asset('img/marcelo.jpg') }}" style = "width: 20%; border: 3px solid #FFF;" alt="Marcelo Programador" class="rounded-circle">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item  {{ (strpos(url()->current(), 'home') !== false)?'active':''}}">
            <a class="nav-link" href="{{route('site.home')}}">Home </a>
          </li>
          <li class="nav-item {{ (strpos(url()->current(), 'quem') !== false)?'active':''}}" >
            <a class="nav-link" href='{{route("site.quem")}}'>Quem sou</a>
          </li>
          <li class="nav-item {{ (strpos(url()->current(), 'contato') !== false)?'active':''}}">
            <a class="nav-link" href="{{route('site.contato')}}">Contato </a>
          </li>         
        </ul>        
      </div>
    </nav>
    <main role="main">
      <div class="album py-5 bg-light">
        
            @yield('conteudo')          
        
      </div>
    </main>
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Voltar ao topo</a>
        </p>
        <p>Site criado por <strong> Marcelo Alves </strong> ou  <strong>Mamdria</strong></p>
      </div>
    </footer>
  </div>
    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="{{asset('./js/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"><\/script>')</script>
    <script src="{{asset('./js/popper.min.js')}}"></script>
    <script src="{{asset('./js/bootstrap.min.js')}}"></script>
    <script src="{{asset('./js/holder.min.js')}}"></script>
  </body>
</html>
