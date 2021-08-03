<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticiaController extends Controller
{
    //
    public function index(Request $request){
        
        $noticias = DB::table('noticias')->where(['id'=>$request->id])->get();

        return view('site.noticias',['noticias'=>$noticias]);
    }
}
