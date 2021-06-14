@extends('admin.template.template')
@section('admintitulo')
Painel Quem Sou
@endsection
@section('adminconteudo')
  @foreach($QUEM as $quem)
    
    <h1>{{$quem->TITULO}}</h1>
    <p>
        {{$quem->TEXTO}} <br>
        Viste meu linkedin <a href="{{$quem->link}}" target="_blank">Marcelo Alves Moreira</a>
    </p>

  @endforeach

@endsection
