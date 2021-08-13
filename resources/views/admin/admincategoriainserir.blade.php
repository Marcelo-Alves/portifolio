@extends('admin.template.template')

@section('admintitulo')
Painel Notícias Adicionar
@endsection

@section('adminconteudo')

<h1>Painel Categoria Adicionar</h1>

<div class="table-responsive">
    <form action="{{route('admin.admincategoriadicionar')}}" method="POST" >
        {{ csrf_field() }}
    <label for="lbltitulo" class="form-control"><strong>NOME</strong></label>
    <input type="text" name="txtnome" id="txtnome" class="form-control">
    <input type="submit" value="Enviar" class="form-control"> 
    </form>

</div>   
@endsection