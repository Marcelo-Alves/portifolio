@extends('site.template.template')

@section('titulo')
BEM VINDO AO SITE MARCROS 
@endsection


@section('conteudo')

<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bem Vindo ao meu Portifólio </h1>
      <p class="lead text-muted">
          @foreach($quemsou as $quem)
            {{$quem->resumo}}
          @endforeach
      </p>
      <a href='{{route("site.quem")}}' class="btn btn-sm btn-outline-secondary">Saiba Mais</a>
    </div>
</section>

<div class="row">
            @foreach($noticias as $noticia)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <!--<img class="card-img-top" src="/img/upload/{{$noticia->img}}" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="{{$noticia->titulo}}">-->
                <img  src="/img/upload/{{$noticia->img}}" class="img-thumbnail" alt="{{$noticia->titulo}}">
                <div class="card-body">
                  <p class="card-text"><h3>{{$noticia->titulo}}</h3></p>
                  <p class="card-text">{!! mb_strimwidth(strip_tags($noticia->texto), 0, 100, "...")!!}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!--<div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </div> -->
                    <div class="btn-group">
                      <a href='{{route("site.quem")}}/{{$noticia->id}}' class="btn btn-sm btn-outline-secondary">Ver Mais</a>
                    </div>
                    <small class="text-muted">{{date('d/m/Y H:i:s', strtotime($noticia->data_criado))}}</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          @endsection
