<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminContatoController extends Controller
{
    public function index(){
        $contato = DB::select('select * from contato order by id desc');
         //DB::table('contato')->get();
        return view('admin.admincontato',["CONTATOS"=>$contato]);
    }
}
