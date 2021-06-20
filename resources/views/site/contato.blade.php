@extends('site.template.template')

@section('titulo')
CONTATO
@stop
<meta name="csrf-token" content="{{ csrf_token() }}">
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
        <div id="resp" name="resp"> </div>
        <form action="{{route('enviaremail')}}"  method="get">
            
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
                <input type="button" name="btnenviar" id="btnenviar" onclick="busca()" value="Enviar" >
            </div>
        </form>

    </div>
    <script>
        var busca = function(){            
                var token ='{{csrf_token()}}'
                const dados={
                        
                        nome:document.querySelector("#txtnome").value,
                        email:document.querySelector("#txtemail").value,
                        observacao:document.querySelector("#txtobservacao").value
                }
            fetch("{{route('enviaremail')}}/",
                {method:'POST',
                mode:'cors',
                headers:{
                    'X-CSRF-TOKEN':token,
                    'Content-Type':'application/json'
                },
                body:JSON.stringify(dados)           
            })
            .then(resposta => 
                (if(resposta.text == 'success'){
                    document.getElementById('resp').innerHTML='Contato Enviado com sucesso';
                    document.querySelector("#txtnome").value='';
                    document.querySelector("#txtemail").value='';
                    document.querySelector("#txtobservacao").value='';
                })
            ));
        }
    </script>



@endsection