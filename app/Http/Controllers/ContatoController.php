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
        
        DB::table('contato')->insert([
            'nome'=>$request['txtnome'],
            'email'=>$request['txtemail'],
            'mensagem'=>$request['txtobservacao'],
            'data'=>date('Y-m-d H:i:s')
        ]);

        $corpo = 'A pessoa '.$request['txtnome'].' entrou em contato pelo site '
                .'deixou o email '.$request['txtemail'].' e a mensagem ' .$request['txtobservacao'];

        $dados = ['name'=>$request['txtnome'],'data'=>$corpo];
        
        Mail::send('site.mail', $dados, function ($message) {
            $message->from('contato@marcros.com.br');
            $message->to('mamdria@gmail.com');            
            $message->subject('Contato do Site');
        });

        /*
        
        $retorno = DB::table('contato')->get();
        dd($retorno)->all();
*/


        return $request['txtnome'];
    }
    

}