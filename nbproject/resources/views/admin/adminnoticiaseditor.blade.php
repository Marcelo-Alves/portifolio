@extends('admin.template.template')

@section('admintitulo')
Painel Notícias Editor
@endsection

@section('adminconteudo')


<h1>Painel Notícias Editor</h1>
<div class="table-responsive">
    <div id="editor">
        <p>This is some sample content.</p>
    </div>
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
@endsection