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
    <label for="lbltitulo">TITULO</label>
    <input type="text" name="txttitulo" id="txttitulo" value="{{$noticia->titulo}}">
    <input type="hidden" name="txtid" id="txtid" value="{{$noticia->id}}">
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
    <input type="submit" value="Enviar" >
    </form>
    @endforeach
</div>   
@endsection