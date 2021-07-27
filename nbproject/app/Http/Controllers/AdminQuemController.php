<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminQuemController extends Controller
{
    public function index(){


        $QUEM = DB::table('quem')->get();

        return view('admin.adminquem',['QUEM'=>$QUEM]);
    }


    public function editor(){

        $QUEM = DB::table('quem')->get();

        return view('admin.adminquemeditor',['QUEM'=>$QUEM]);
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
