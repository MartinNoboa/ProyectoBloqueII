<?php

use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\UserAuthController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReporteController;

use App\Http\Controllers\DonatorController;
use App\Http\Controllers\ChildrenController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 
Route::get('/home', function(){
    return view('registrado.panel');
}); */


Route::get('/', [LandingController::class, 'homeTexts']);

Route::get('/nosotros', [LandingController::class, 'nosotrosTexts']);

Route::view ('cd ','landing.landing-contacto')->name('landing.landing-contacto');

Route::post('landing-contacto', 'App\Http\Controllers\MessagesController@store');



Route::get('/donaciones', function(){
    
    return view("landing-donaciones");
});

/*
Route::get('/donador', function(){
    
    return view("landing-registro-don");
});
*/
//Route::get('donacionexitosa', DonatorController::class)->name('donador');

Route::resource('donador',DonatorController::class);




Route::get('/nosotros-areas', [LandingController::class, 'areasTexts']);
Route::get('/nosotros-logros', [LandingController::class, 'logroText']);
Route::get('/noticias',[LandingController::class,'index']);
Route::get('/nosotros-ayuda', function(){return view("landing.nosotros-ayuda");});


Route::get('/home/noticias', [NewsController::class,'index'])->name('news');
Route::get('/noticias/registrar-noticia', [NewsController::class,'showForm'])->middleware('sesionIniciada')->name('upload-image');
Route::post('/noticias/registrar-noticia', [NewsController::class,'upload_image']);
Route::get('/noticias/edit/{id}',[NewsController::class,'edit'])->name('editNews')->middleware('sesionIniciada');
Route::patch('/noticias/edit/{id}',[NewsController::class,'update']);
Route::get('/noticias/delete/{id}',[NewsController::class,'delete']);
Route::get('/noticias/view/{id}',[NewsController::class,'view_news']);
Route::get('/noticia/ver/{id}',[LandingController::class, 'verNoticia']);


//Rutas para CRUD de reportes

Route::resource('reporte', ReporteController::class)->middleware('sesionIniciada');
Route::get('/reporte/{id}/show',[ReporteController::class, 'show'])->middleware('sesionIniciada');



Route::get('/registrar-usuario',[RegisterController::class,'index'])->middleware('sesionIniciada')->name('register');
Route::post('/registrar-usuario',[RegisterController::class,'store']);
Route::get('/registrar-usuario/{id}/see',[RegisterController::class,'show']);

Route::get('/usuarios',[UsuariosController::class,'index'])->middleware('sesionIniciada')->name('lista_usuarios');
Route::get('/usuarios/search',[UsuariosController::class,'recuperarUsuarios'])->name('UsuariosController.search');

Route::post('/usuarioadd',[UsuariosController::class,'addUsuario'])->middleware('sesionIniciada');
Route::resource('usuario',UsuariosController::class);
Route::get('/usuario/{id}/edit',[UsuariosController::class,'edit'])->name('editUser')->middleware('sesionIniciada');
Route::patch('/usuario/{id}/edit',[UsuariosController::class,'update']);

Route::get('/calendario', function(){
    return view("landing.landing-calendario");
});


Route::get('/donadores/{id}/show',[DonatorController::class, 'show'])->middleware('sesionIniciada');


use App\Http\Controllers\DonadoresController;
Route::resource('donadores',DonadoresController::class)->middleware('sesionIniciada');




//rutas para el controlador de login y logout

//use App\Http\Controllers\Auth\UserAuthController;



/** 
 * Rutas para el manejo de la seccion de ninos
 */
Route::get('/ninos',[ChildrenController::class,'index'])->middleware('sesionIniciada')->name('lista_ninos');
Route::get('/ninos/search',[ChildrenController::class,'recuperarNinos'])->name('buscar_ninos');


/** 
 * Rutas para el controlador de login y logout 
*/
Route::get('login',[UserAuthController::class,'login'])->middleware('sesionYaIniciada')->name('login');
Route::post('check',[UserAuthController::class,'check'])->name("auth.check");
Route::get('panel',[UserAuthController::class,'panel'])->middleware('sesionIniciada');
Route::get('logout',[UserAuthController::class,'logout'])->name('logout');




/*
* Funcion para probar si la conecxion es correcta
*
Route::get('test-db', function(){
    try{
       DB::connection() -> getPdo();
        echo "Conectado correctamente a " . DB::connection() -> getDatabaseName();
    }catch(\Exception $e){
        die("Error" . $e);
    }
});
*/
