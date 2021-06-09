@extends('admin.template.template')

@section('admintitulo')
Painel Notícias
@endsection

@section('adminconteudo')
<h1>Contato Admin</h1>
<div class="table-responsive">
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
        <tr>
          <td>Covid -19</td>
          <td>Mais de 350.000 morte pela codiv-19</td>
          <td>{{date('d/m/Y H:i:s')}}</td>
          <td><a href='#'>Editar</a></td>
          <td><a href='#'>Deletar</a></td>
        </tr>
        <tr>
          <td>Desemprego</td>
          <td>Auta histórica no desemprego</td>
          <td>{{date('d/m/Y H:i:s')}}</td>
          <td><a href='#'>Editar</a></td>
          <td><a href='#'>Deletar</a></td>
        </tr>
        <tr>
          <td>Cesta basíca mais cara</td>
          <td>Neste mês a cesta basíca terá aumento</td>
          <td>{{date('d/m/Y H:i:s')}}</td>
          <td><a href='#'>Editar</a></td>
          <td><a href='#'>Deletar</a></td>
        </tr>
      </tbody>
    </table>
  
@endsection