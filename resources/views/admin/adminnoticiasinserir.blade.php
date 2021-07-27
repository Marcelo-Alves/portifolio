@extends('admin.template.template')

@section('admintitulo')
Painel Notícias Adicionar
@endsection

@section('adminconteudo')

<h1>Painel Notícias Adicionar</h1>

<div class="table-responsive">
    <form action="{{route('admin.adminnoticiasadicionar')}}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}
    <label for="lbltitulo" class="form-control">TITULO</label>
    <input type="text" name="txttitulo" id="txttitulo" class="form-control">
    <label for="lblimagem" class="form-control">Imagem Principal</label>
    <input type="file" name="imgprincipal" id="imgprincipal" class="form-control">
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