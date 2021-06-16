@yield('admin.template.template')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Marcelo Alves">
    <title>@yield('admintitulo')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('admin/css/dashboard.css')}}" rel="stylesheet">
  </head>

  <body cz-shortcut-listen="true">
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse" style="background-color: #000;">
        <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{route('admin.noticias')}}">Principal</a>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          
        </div>
      </nav>

    <div class="container">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.noticias')}}">Notícias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.quem')}}">Quem Sou</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.contato')}}">Contato</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.login')}}">Sair</a>
              </li>  
          </ul>          
        </nav>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          @yield('adminconteudo')
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('admin/js/jquery-3.3.1.slim.min.js')}}" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{asset('admin/js/jquery-3.3.1.slim.min.js')}}"><\/script>')</script>
    <script src="{{asset('admin/js/tether.min.js')}}" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('admin/js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
</html>
