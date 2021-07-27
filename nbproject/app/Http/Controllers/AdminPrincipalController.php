<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPrincipalController extends Controller
{
    public function index(){
        return view('admin.adminprincipal');
    }
}
