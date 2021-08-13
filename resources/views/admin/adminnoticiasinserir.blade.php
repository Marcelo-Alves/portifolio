@extends('admin.template.template')

@section('admintitulo')
Painel Notícias Adicionar
@endsection

@section('adminconteudo')

<h1>Painel Notícias Adicionar</h1>

<div class="table-responsive">
    <form action="{{route('admin.adminnoticiasadicionar')}}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}
    <label for="lbltitulo" class="form-control"><strong>TITULO</strong></label>
    <input type="text" name="txttitulo" id="txttitulo" class="form-control">
    <label for="lblcategoria" class="form-control"><strong>CATEGORIAS</strong></label>
    <select id="selcategoria" name="selcategoria" class="form-control">
        <option></option>
        @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
        @endforeach
    </select>


    <label for="lblimagem" class="form-control"><strong>Imagem Principal</strong></label>
    <input type="file" name="imgprincipal" id="imgprincipal" class="form-control">
    <label for="lbltela_principal" class="form-control"><strong>EXIBE NA HOME?</strong></label>
    <select name="txttela_principal" id="txttela_principal" class="form-control">
        <option value='1'>Sim</option>
        <option value='0'>Não</option>
    </select>
    <textarea id="editor" name="editor"  rows="10" cols="80">
        
    </textarea>
    <script>
///*
    CKEDITOR.replace( 'editor', {
            height: 300,
            filebrowserUploadUrl: "{{route('admin.upload',['_token'=> csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
    
        } );
    </script>
    <input type="submit" value="Enviar" class="form-control"> 
    </form>

</div>   
@endsection