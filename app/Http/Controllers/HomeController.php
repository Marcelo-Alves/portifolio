<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.adminlogin');
    }
    public function logar(Request $request){
        
        $usuario = [
            'email' => $request->email,
            'senha' => $request->senha
        ];

       $banco = DB::table('usuarios')->where($usuario)->get();  
        
        if(isset($banco[0])){

            $busca_usuario = [
                'id'=>$banco[0]->id,
                'nome'=>$banco[0]->nome,
                'senha'=>$banco[0]->senha
            ];
            session()->put($busca_usuario);
            return redirect()->route('admin.principal'); 
        }
        else{
            return redirect()->route('admin.login'); 
        }
    }
}
