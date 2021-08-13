<li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      Artigos </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

             @foreach ($categorias as $categoria)

             <a class="dropdown-item" href="{{route('site.categoria')}}/{{$categoria->id}}">{{$categoria->nome}}</a>
                 
             @endforeach

        </div>
  </li>