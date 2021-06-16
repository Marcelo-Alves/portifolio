@extends('site.template.template')

@section('titulo')
CONTATO
@stop

@section('conteudo')
    <div class="container">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Contato </h1>
                <p class="lead text-muted">
                    Por favor entre em contato <br>
                    E logo respoderei.
                </p>
            </div>
        </section>
        <form action="{{route('enviaremail')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="txtnome">Nome</label>
                <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="txtemail">Endereço de email</label>
                <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Digite seu email">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Observação</label>
                <textarea id="txtobservacao" name="txtobservacao" class="form-control" rows="3" placeholder="Observação"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar" >
            </div>
        </form>

    </div>
@endsection