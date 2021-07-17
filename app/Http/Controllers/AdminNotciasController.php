<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNotciasController extends Controller
{
    public function index(){

        if(session()->get('id')){
            
            return view('admin.adminnoticias');
        }
        return redirect()->route(route:'admin.login'); //*/
    }

    public function editor(){
        return view('admin.adminnoticiaseditor');
    }

}
