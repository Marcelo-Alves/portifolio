<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    public function busca(){
        $pessoas = DB::table('pessoa')->get();

        return dd($pessoas);
    }
    public function index(){
        $quemsou = DB::table('quem')->get();

        return view('site.home',['quemsou'=>$quemsou]);
    }
}
