<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContatoController extends Controller
{
    public function index(){
        return view('site.contato');
    }

    public function enviaremail(Request $request){
             DB::table('contato')->insert([
                'nome'=>$request['nome'],
                'email'=>$request['email'],
                'mensagem'=>$request['observacao'],
                'data'=>date('Y-m-d H:i:s')
            ]);


            $dados = array(
                'nome'=>$request['nome'],
                'email'=>$request['email'],
                'observacao'=>$request['observacao'],
                'data'=>date('d/m/y H:i') );
               
            Mail::to( config('mail.from.address') )
                ->send( new SendMail($dados) );

            return json_encode(["resposta"=>"sucesso"]);
      
    }  
}