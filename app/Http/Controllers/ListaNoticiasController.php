<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListaNoticiasController extends Controller
{
    public function lista(){
        $noticias = DB::table('noticias')->orderby('data_criado')->get();

        return view('site.home',['listanoticias' => $noticias]);
    }
}
