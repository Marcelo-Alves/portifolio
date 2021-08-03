@extends('site.template.template')
@section('titulo')
NOTÍCIAS
@stop

@section('conteudo')
@foreach ($noticias as $noticia)
<h1>{{$noticia->titulo}}</h1>
<div>
    <div class="text-center" >
        <img src="/img/upload/{{$noticia->img}}" height="500px" 
        class="img-thumbnail"
        style="max-width:500px" alt="{{$noticia->titulo}}">
    </div>
    <br>
    <br>
  
    {!!$noticia->texto!!}
</div>
@endforeach



@stop