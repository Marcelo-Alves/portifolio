@extends('admin.template.template')

@section('admintitulo')
Painel Notícias
@endsection

@section('adminconteudo')
<h1>Painel Notícias</h1>
<div class="table-responsive">
    <table class='table table-striped'>
      <tr>
        <td> <a href="{{route('admin.adminnoticiasinserir')}}"> Adicionar Notícias </a>
        </td>
      </tr>
    </table>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Notícias</th>
          <th>Texto</th>
          <th>Data</th>
          <th>Editar</th>
          <th>Deletar</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($noticias as $noticia)
        <tr>
          <td>{{$noticia->titulo}}</td>
          <td>{!! mb_strimwidth(strip_tags($noticia->texto), 0, 250, "...")!!}</td>
          <td>{{date('d/m/Y H:i:s', strtotime($noticia->data_criado))}}</td>
          <td><a href="{{route('admin.adminnoticiaseditor')}}/{{$noticia->id}}">Editar</a></td>
          <td><a href="{{route('admin.adminnoticiasdeletar')}}/{{$noticia->id}}" onclick="return deletar()">Deletar</a></td>
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