<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCategoriaController extends Controller
{
    public function index(){
        
        $categoria = DB::table('categoria')->get();
        return view('admin.admincategoria',['categorias'=>$categoria]);
        
    }

    public function inserir(){

        return view('admin.admincategoriainserir');
    }

    public function adicionar(Request $request){
        $adicionar =[            
            'nome' => $request->txtnome,
            'data_criado' => date('Y-m-d H:i:s'),
        ];         

        DB::table('categoria')->insert($adicionar);

        return redirect()->route('admin.categoria');

    }

    public function editar(Request $request){

        $editar=DB::table('categoria')->where(['id'=>$request->id])->get();

        //dd($editar);

        return view('admin.admincategoriaeditar',['editar'=>$editar]);        
    }

    public function editor(Request $request){

        DB::table('categoria')->where('id',$request->txtid)->update(['nome' => $request->txtnome]);

        return redirect()->route('admin.categoria'); 
       
    }

    public function deletar(Request $request){

        DB::table('categoria')->where('id',$request->id)->delete();

        return redirect()->route('admin.categoria'); 
       
    }
    
}
