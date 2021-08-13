@extends('admin.template.template')

@section('admintitulo')
Painel Categoria
@endsection

@section('adminconteudo')
<h1>Painel Categoria</h1>
<div class="table-responsive">
    <table class='table table-striped'>
      <tr>
        <td> <a href="{{route('admin.admincategoriainserir')}}"> Adicionar Categoria </a>
        </td>
      </tr>
    </table>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Categoria</th>
          <th>Data</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($categorias as $categoria)
        <tr>
          <td>{{$categoria->nome}}</td>
          <td>{{date('d/m/Y', strtotime($categoria->data_criado))}}</td>
          <td><a href="{{route('admin.admincategoriaeditar')}}/{{$categoria->id}}">Editar</a></td>
          <td><a href="{{route('admin.admincategoriadeletar')}}/{{$categoria->id}}" onclick="return deletar()">Deletar</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <script>
      function deletar(){
         
          var retorno = confirm("Deseja mesmo excluir!");
          return retorno;
          
          }
    </script>
  
@endsection