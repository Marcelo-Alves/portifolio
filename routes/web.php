<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\QuemController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPrincipalController;
use App\Http\Controllers\AdminContatoController;
use App\Http\Controllers\AdminNotciasController;
use App\Http\Controllers\AdminQuemController;

/** Route::get('/', function () {    return view('welcome'); }); **/
/*Route::get('/',function () { 
    return view('principal');
});*/

Route::get('/',[PrincipalController::class,'index'])->name('site.home');
Route::get('/home',[PrincipalController::class,'index'])->name('site.home');
Route::get('/busca',[PrincipalController::class,'busca'])->name('site.busca');
Route::get('/quem',[QuemController::class,'index'])->name('site.quem');
Route::get('/contato',[ContatoController::class,'index'])->name('site.contato');
Route::post('/enviaremail',[ContatoController::class,'enviaremail'])->name('enviaremail');
Route::get('/noticia',[NoticiaController::class,'index'])->name('site.noticia');
Route::get('/painel',[HomeController::class,'index'])->name('admin.login');
Route::get('/painel/principal', [AdminPrincipalController::class,'index'])->name('admin.principal');
Route::get('/painel/noticias', [AdminNotciasController::class,'index'])->name('admin.noticias');
Route::get('/painel/noticias/editor', [AdminNotciasController::class,'editor'])->name('admin.adminnoticiaseditor');
Route::get('/painel/quem', [AdminQuemController::class,'index'])->name('admin.quem');
Route::get('/painel/quem/editor', [AdminQuemController::class,'editor'])->name('admin.quemeditor');
Route::post('/painel/quem/editar', [AdminQuemController::class,'editar'])->name('admin.quemeditar');
Route::get('/painel/contato', [AdminContatoController::class,'index'])->name('admin.contato');
    
