@extends('site.template.template')

@section('titulo')
CONTATO
@stop
@section('conteudo')
    <div class="container">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Contato </h1>                
            </div>
        </section>
        <div id="resp" name="resp" role="alert"> </div>
        <form > 
            
            <div class="form-group">
                <label for="txtnome">Nome</label>
                <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="txtemail">Endereço de email</label>
                <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Digite seu email">
            </div>

            <div class="form-group">
                <label for="txtobservacao">Observação</label>
                <textarea id="txtobservacao" name="txtobservacao" class="form-control" rows="3" placeholder="Observação"></textarea>
            </div>
            <div class="form-group">
                <input type="button" name="btnenviar" id="btnenviar" onclick="busca()" value="Enviar" >
            </div>
        </form>

    </div>
    <script>
        var busca = function(){      
                document.getElementById('resp').className ="alert alert-secondary";
                document.getElementById('resp').innerHTML='<h1>Processando .</h1>';

                tnome = document.querySelector("#txtnome").value;
                temail = document.querySelector("#txtemail").value;
                tobservacao = document.querySelector("#txtobservacao").value;

                if(tnome =="" || temail =="" ||tobservacao ==""){
                    document.getElementById('resp').className ="alert alert-danger";
                    document.getElementById('resp').innerHTML='<h3>Por favor <br> Preencha todos os campos .</h3>';
                    return false;
                }

                var token ='{{csrf_token()}}'
                const dados={
                        nome:tnome,
                        email:temail,
                        observacao:tobservacao
                }
                //?nome="+tnome+"&email="+temail+"&observacao="+tobservacao
                document.getElementById('resp').className ="alert alert-secondary";
                document.getElementById('resp').innerHTML='<h1>Processando .</h1>';


               fetch("{{route('enviaremail')}}", {
                            method:'POST',
                            mode:'cors',
                            headers:{
                            'X-CSRF-TOKEN':token,
                            'Content-Type':'application/json'
                    },
                    body:JSON.stringify(dados) 
                        }
                )
                .then(resposta => {  resposta.json()
                    .then(ddado => {retorno(ddado.resposta)})                                
                })                     
        }
        const retorno = (resultado) => {
                    document.getElementById('resp').className ="alert alert-secondary";
                    document.getElementById('resp').innerHTML='<h1>Processando ..</h1>';
                    
                    if(resultado =='sucesso'){
                        document.getElementById('resp').className ="alert alert-success";
                        document.getElementById('resp').innerHTML='<h1>Contato Enviado com sucesso.</h1>';
                        document.querySelector("#txtnome").value='';
                        document.querySelector("#txtemail").value='';
                        document.querySelector("#txtobservacao").value='';
                        document.getElementById("btnenviar").disabled = "true";
                    }
                    else{
                        document.getElementById('resp').className ="alert alert-danger";
                        document.getElementById('resp').innerHTML='<h1>Erro ao enviar o contato.</h1>';
                    }    
                }
    </script>



@endsection
