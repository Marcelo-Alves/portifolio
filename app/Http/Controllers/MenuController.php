<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
    {
        $menu = DB::table('categoria')->get();

        return view('site.template.template',['menu'=>$menu]);

    }
}
