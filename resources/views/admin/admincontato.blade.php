@extends('admin.template.template')
@section('admintitulo')
Painel Contato
@endsection
@section('adminconteudo')
<h1>Contato Admin</h1>
<div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Mensagem</th>
          <th>Data</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Kamylly</td>
          <td>kamilly@email.com.br</td>
          <td>Mensagem mensage Kamilly</td>
          <td>{{date('d/m/Y H:i:s')}}</td>
        </tr>
        <tr>
            <td>Michele</td>
            <td>michele@email.com.br</td>
            <td>Mensagem mensage Michele</td>
            <td>{{date('d/m/Y H:i:s')}}</td>
          </tr>
          <tr>
            <td>Kaike</td>
            <td>kaike@email.com.br</td>
            <td>Mensagem mensage Kaike</td>
            <td>{{date('d/m/Y H:i:s')}}</td>
          </tr>
      </tbody>
    </table>
  
@endsection