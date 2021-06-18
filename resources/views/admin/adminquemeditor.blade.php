@extends('admin.template.template')

@section('admintitulo')
Painel Quem Sou Editor
@endsection

@section('adminconteudo')


<h1>Painel Quem Sou Editor</h1>
<div class="table-responsive">
    <form action="{{route('admin.quemeditar')}}" method="POST">
        {{ csrf_field() }}
        @foreach($QUEM as $quem)
            <input type="hidden" name="idquem" value="{{$quem->id}}">
            <input type="text" name="txttitulo" value="{{$quem->TITULO}}"  class="form-control" >
            <br>
            <textarea name="content" id="editor"  class="form-control" >                    
                {!! $quem->TEXTO !!}
            </textarea>
            <br>
            <textarea name="txtresumo" class="form-control" rows="4">
                {{$quem->resumo }}
            </textarea>
        @endforeach
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ), {
            
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                            ]
                        }
                    } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <br>
        <input type="submit" value="Salvar">
    </form>
@endsection