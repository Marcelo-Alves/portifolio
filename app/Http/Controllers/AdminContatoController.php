<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminContatoController extends Controller
{
    public function index(){

        if(session()->get('id')){
            $contato = DB::select('select * from contato order by id desc');
            return view('admin.admincontato',["CONTATOS"=>$contato]);
        }
        return redirect()->route('admin.login'); //*/


        
    }
}
