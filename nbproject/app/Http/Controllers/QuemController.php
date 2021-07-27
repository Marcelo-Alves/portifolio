<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuemModal;
use Illuminate\Support\Facades\DB;

class QuemController extends Controller
{
    public function index(){

        $QUEM = DB::table('quem')->get();
        return view('site.quem',['QUEM'=>$QUEM]);
    }

}
