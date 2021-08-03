<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminNotciasController extends Controller
{
    public function index(){

        if(session()->get('id')){
            
            $noticias = DB::select('select * from noticias order by data_criado desc');

            return view('admin.adminnoticias',['noticias'=>$noticias]);

        }
        return redirect()->route('admin.login'); 
    }

    public function editor(Request $request){

        $id=['id'=>$request->id];

        $noticia = DB::table('noticias')->where($id)->get() ; 
        //select('select * from noticias where id=?',['id'=> $id]);

        //dd($noticia[0]->tela_principal);

        if($noticia[0]->tela_principal == 1){

            $telas = [
                'sim'=>'selected',
                'nao'=>'',
            ];
        }
        else {

            $telas = [
                'sim'=>'',
                'nao'=>'selected',
            ];
        }
        

        return view('admin.adminnoticiaseditor',['noticias'=>$noticia,'telas'=>$telas]);
    }

    public function inserir(){

        return view('admin.adminnoticiasinserir');
    }


    public function adicionar(Request $request){

       if($request->file()){
            $image = $request->file('imgprincipal');
            $imageName = 'img_'.date('ymd').time().'.'.$image->extension(); 
            $image->move(public_path('img/upload'),$imageName); 
        }
        else{
            $imageName ="";
        }

        $adicionar =[            
            'titulo' => $request->txttitulo,
            'tela_principal' => $request->txttela_principal,
            'texto' => $request->editor,
            'data_criado' => date('Y-m-d H:i:s'),
            'img' => $imageName
        ];         

        DB::table('noticias')->insert($adicionar);

        return redirect()->route('admin.noticias');
    }
    
    public function editar(Request $request){

        $alterar =[            
            'titulo' => $request->txttitulo,
            'tela_principal' => ($request->txttela_principal ==1?1:0),
            'texto' => $request->editor
        ];
        //dd($alterar);
        DB::table('noticias')->where('id',$request->txtid)->update($alterar);

        return redirect()->route('admin.noticias'); 
    }

    public function deletar(Request $request){

        DB::table('noticias')->where('id',$request->id)->delete();

        return redirect()->route('admin.noticias'); 
    }


    public function upload(Request $request){
        $image = $request->file('upload');
        $imageName = 'img_'.date('ymd').time().'.'.$image->extension(); 
        $image->move(public_path('img/upload'),$imageName);  
        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('img/upload/'.$imageName); 
        $msg = "Upload com sucesso ".$CKEditorFuncNum ;
        $retorno = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
          
        // Render HTML output 
        @header('Content-type: text/html; charset=utf-8'); 
        echo $retorno;
    }
}
