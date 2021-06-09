@extends('site.template.template')

@section('titulo')
QUEM SOU E EXPERIÊNCIA
@endsection

@section('conteudo')
<div class="container">
@foreach($QUEM as $quem)
    
    <h1>{{$quem->TITULO}}</h1>
    <p>
        {{$quem->TEXTO}}
    </p>

@endforeach

    
</div>
@endsection