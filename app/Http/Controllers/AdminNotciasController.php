<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNotciasController extends Controller
{
    public function index(){
        return view('admin.adminnoticias');
    }
}
