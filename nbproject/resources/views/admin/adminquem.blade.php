@extends('admin.template.template')
@section('admintitulo')
Painel Quem Sou
@endsection
@section('adminconteudo')
  @foreach($QUEM as $quem)
    
    <h1>{{$quem->TITULO}}</h1>
    {!! $quem->TEXTO !!}     

  @endforeach
  <a href="{{route('admin.quemeditor')}}" >Editar</a>
@endsection
