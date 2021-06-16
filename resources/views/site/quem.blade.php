@extends('site.template.template')

@section('titulo')
QUEM SOU E EXPERIÊNCIA
@endsection

@section('conteudo')
<div class="container">
@foreach($QUEM as $quem)
    
    <h1>{{$quem->TITULO}}</h1>
    <p>
        {{$quem->TEXTO}} <br>
        Viste meu linkedin <a href="{{$quem->link}}" target="_blank">Marcelo Alves Moreira</a>
    </p>

@endforeach


    
</div>
@endsection