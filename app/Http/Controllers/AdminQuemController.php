<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminQuemController extends Controller
{
    public function index(){
        return view('admin.adminquem');
    }
}
