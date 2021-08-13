@extends('admin.template.template')

@section('admintitulo')
Painel Categoria Adicionar
@endsection

@section('adminconteudo')

<h1>Painel Categoria Editar</h1>

<div class="table-responsive">
    <form action="{{route('admin.admincategoriaeditor')}}" method="POST" >
        {{ csrf_field() }}
    <label for="lbltitulo" class="form-control"><strong>NOME</strong></label>
    <input type="text" name="txtnome" id="txtnome" value="{{$editar[0]->nome}}" class="form-control">
    <input type="hidden" name="txtid" id="txtid" value="{{$editar[0]->id}}" >
    <input type="submit" value="Enviar" class="form-control"> 
    </form>

</div>   
@endsection