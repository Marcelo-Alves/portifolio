<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPrincipalController extends Controller
{
    public function index(){

        if(session()->get('id')){
            return view('admin.adminprincipal');
        }
        return redirect()->route(route:'admin.login'); //*/
    }
}
