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
}
