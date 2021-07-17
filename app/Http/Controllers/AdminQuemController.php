<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminQuemController extends Controller
{
    public function index(){

        if(session()->get('id')){
            
            $QUEM = DB::table('quem')->get();
            return view('admin.adminquem',['QUEM'=>$QUEM]);
        }

        return redirect()->route(route:'admin.login'); //*/
        
    }


    public function editor(){

        if(session()->get('id')){
            
            $QUEM = DB::table('quem')->get();
            return view('admin.adminquem',['QUEM'=>$QUEM]);
        }

        return redirect()->route(route:'admin.login'); 
    }

    public function editar(Request $request){

        $dado = $request;

        DB::table('quem')->where('id',$dado['idquem'])
                        ->update(
                    ['TITULO'=>$dado['txttitulo'],
                    'TEXTO'=>$dado['content'],
                    'resumo'=>$dado['txtresumo'],
                    ]);

        $QUEM = DB::table('quem')->get();
        return view('admin.adminquem',['QUEM'=>$QUEM]);
    }        

}
