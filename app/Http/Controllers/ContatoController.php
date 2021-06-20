<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function index(){
        return view('site.contato');
    }

    public function enviaremail(Request $request){
        try{
            DB::table('contato')->insert([
                'nome'=>$request['nome'],
                'email'=>$request['email'],
                'mensagem'=>$request['observacao'],
                'data'=>date('Y-m-d H:i:s')
            ]);

            $corpo = 'A pessoa '.$request['nome'].' entrou em contato pelo site '
                    .'deixou o email '.$request['email'].' e a mensagem ' .$request['observacao'];

            $dados = ['name'=>$request['nome'],'data'=>$corpo];
            
            Mail::send('site.mail', $dados, function ($message) {
                $message->from('contato@marcros.com.br');
                $message->to('mamdria@gmail.com');            
                $message->subject('Contato do Site');
            });
            echo 'success';
        }
        catch(Exceptions $e){
            echo $e->getMessage();
        }
    }  
}