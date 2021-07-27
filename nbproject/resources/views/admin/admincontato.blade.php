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
            @foreach ($CONTATOS as $contato)
            <tr>
              <td>{{$contato->nome}}</td>
              <td>{{$contato->email}}</td>
              <td>{{$contato->mensagem}}</td>
              <td>{{date('d/m/Y H:i:s', strtotime($contato->data))}}</td>
            </tr>                   
            @endforeach
      </tbody>
    </table>
  
@endsection