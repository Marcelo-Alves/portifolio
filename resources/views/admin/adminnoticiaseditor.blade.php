@extends('admin.template.template')

@section('admintitulo')
Painel Notícias Editor
@endsection

@section('adminconteudo')

<h1>Painel Notícias Editor</h1>

<div class="table-responsive">
    @foreach($noticias as $noticia)

    <form action="{{route('admin.adminnoticiaseditar')}}" method="POST">
        {{ csrf_field() }}
    <label for="lbltitulo" class="form-control"><strong>TITULO</strong></label>
    <input type="text" name="txttitulo" id="txttitulo" value="{{$noticia->titulo}}" class="form-control">
    <input type="hidden" name="txtid" id="txtid" value="{{$noticia->id}}">
    <label for="lblcategoria" class="form-control"><strong>CATEGORIAS</strong></label>
    <select id="selcategoria" name="selcategoria" class="form-control">
        <option></option>
        @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}" {{($noticia->id_categoria==$categoria->id?'selected':'')}} >{{$categoria->nome}}</option>
        @endforeach
    </select>

    <label for="lbltela_principal" class="form-control"><strong>EXIBE NA HOME?</strong></label>
    <select name="txttela_principal" id="txttela_principal" class="form-control">
       
            <option value='1' {{$telas['sim']}} >Sim</option>
            <option value='0' {{$telas['nao']}} >Não</option>
               
    </select>
    <textarea id="editor" name="editor"  rows="10" cols="80">
        {{$noticia->texto}}
    </textarea>
    <script>

    CKEDITOR.replace( 'editor', {
            height: 300,
            filebrowserUploadUrl: "{{route('admin.upload',['_token'=> csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
    
        } );
    </script>
    <input type="submit" value="Enviar"  class="form-control">
    </form>
    @endforeach
</div>   
@endsection