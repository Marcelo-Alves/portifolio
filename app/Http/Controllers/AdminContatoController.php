<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContatoController extends Controller
{
    public function index(){
        return view('admin.admincontato');
    }
}
