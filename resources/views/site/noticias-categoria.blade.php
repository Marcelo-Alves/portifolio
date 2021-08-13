@extends('site.template.template')
@section('titulo')
CATEGORIA
@stop

@section('conteudo')


<div class="row">
    @foreach($categorias as $categoria)
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        @if ($categoria->img)
          <img  src="/img/upload/{{$categoria->img}}" class="img-thumbnail" alt="{{$categoria->titulo}}">
        @endif
        
        <div class="card-body">
          <p class="card-text"><h3>{{$categoria->titulo}}</h3></p>
          <p class="card-text">{!! mb_strimwidth(strip_tags($categoria->texto), 0, 100, "...")!!}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href='{{route("site.noticia")}}/{{$categoria->id}}' class="btn btn-sm btn-outline-secondary">Ver Mais</a>
            </div>
            <small class="text-muted">{{date('d/m/Y H:i:s', strtotime($categoria->data_criado))}}</small>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>



@stop