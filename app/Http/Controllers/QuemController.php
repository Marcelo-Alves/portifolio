<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuemModal;
use Illuminate\Support\Facades\DB;

class QuemController extends Controller
{
    public function index(){

        $QUEM = DB::table('quem')->get();

        /*$Objeto = new QuemModal();
        $quem = $Objeto->Quem();*/
        //dd($quem);

        return view('site.quem',['QUEM'=>$QUEM]);
    }

}
