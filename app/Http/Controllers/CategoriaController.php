<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        $categoria = DB::table('noticias')->where(['id_categoria'=>$request->id])->get();

        return view('site.noticias-categoria',['categorias'=>$categoria]);

    }
}
