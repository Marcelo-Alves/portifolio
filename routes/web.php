<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\QuemController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminPrincipalController;
use App\Http\Controllers\AdminContatoController;
use App\Http\Controllers\AdminNotciasController;
use App\Http\Controllers\AdminQuemController;
use App\Http\Controllers\AdminCategoriaController;
use Illuminate\Http\Request;

Route::get('/',[PrincipalController::class,'index'])->name('site.home');
Route::get('/home',[PrincipalController::class,'index'])->name('site.home');
Route::get('/busca',[PrincipalController::class,'busca'])->name('site.busca');
Route::get('/quem',[QuemController::class,'index'])->name('site.quem');
Route::get('/contato',[ContatoController::class,'index'])->name('site.contato');
Route::get('/categoria/{id?}',[CategoriaController::class,'index'])->name('site.categoria');
Route::post('/enviaremail',[ContatoController::class,'enviaremail'])->name('enviaremail');
Route::get('/noticia/{id?}',[NoticiaController::class,'index'])->name('site.noticia');

Route::get('/painel',[HomeController::class,'index'])->name('admin.login');
Route::post('/painel/logar',[HomeController::class,'logar'])->name('admin.logar');
Route::get('/painel/principal', [AdminNotciasController::class,'index'])->name('admin.principal');
Route::get('/painel/categoria', [AdminCategoriaController::class,'index'])->name('admin.categoria');
Route::get('/painel/categoria/inserir', [AdminCategoriaController::class,'inserir'])->name('admin.admincategoriainserir');
Route::post('/painel/categoria/adicionar', [AdminCategoriaController::class,'adicionar'])->name('admin.admincategoriadicionar');
Route::post('/painel/categoria/editor', [AdminCategoriaController::class,'editor'])->name('admin.admincategoriaeditor');
Route::get('/painel/categoria/editar/{id?}', [AdminCategoriaController::class,'editar'])->name('admin.admincategoriaeditar');
Route::get('/painel/categoria/deletar/{id?}', [AdminCategoriaController::class,'deletar'])->name('admin.admincategoriadeletar');
Route::get('/painel/noticias', [AdminNotciasController::class,'index'])->name('admin.noticias');
Route::get('/painel/noticias/editor/{id?}', [AdminNotciasController::class,'editor'])->name('admin.adminnoticiaseditor');
Route::get('/painel/noticias/deletar/{id?}', [AdminNotciasController::class,'deletar'])->name('admin.adminnoticiasdeletar');
Route::get('/painel/noticias/inserir', [AdminNotciasController::class,'inserir'])->name('admin.adminnoticiasinserir');
Route::post('/painel/noticias/editar', [AdminNotciasController::class,'editar'])->name('admin.adminnoticiaseditar');
Route::post('/painel/noticias/adicionar', [AdminNotciasController::class,'adicionar'])->name('admin.adminnoticiasadicionar');
Route::get('/painel/quem', [AdminQuemController::class,'index'])->name('admin.quem');
Route::get('/painel/quem/editor', [AdminQuemController::class,'editor'])->name('admin.quemeditor');
Route::post('/painel/quem/editar', [AdminQuemController::class,'editar'])->name('admin.quemeditar');
Route::get('/painel/contato', [AdminContatoController::class,'index'])->name('admin.contato');
Route::get('/painel/logout', function(){
  session()->flush();
  return redirect()->route('admin.login'); 
})->name('admin.logout'); 

Route::post('/painel/upload', [AdminNotciasController::class,'upload'])->name('admin.upload');