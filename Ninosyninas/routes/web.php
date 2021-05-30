<?php

use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\UserAuthController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\DonatorController;
use App\Http\Controllers\DonadoresController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\Galeria\GaleriaController;
use App\Http\Controllers\Galeria\GaleriaHomeController;

/*
|--------------------------------------------------------------------------
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
Route::get('/nosotros-ayuda',[LandingController::class,'ayudaTexts']);
Route::get('/contactanos',[LandingController::class,'contactoTexts']);

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
Route::get('/usuario/{id}/show',[UsuariosController::class, 'show'])->middleware('sesionIniciada');

Route::get('/usuarios',[UsuariosController::class,'index'])->middleware('sesionIniciada')->name('lista_usuarios');
Route::get('/usuarios/search',[UsuariosController::class,'recuperarUsuarios'])->name('buscarUsuarios');

Route::post('/usuarioadd',[UsuariosController::class,'addUsuario'])->middleware('sesionIniciada');
Route::resource('usuario',UsuariosController::class);
Route::get('/usuario/{id}/edit',[UsuariosController::class,'edit'])->name('editUser')->middleware('sesionIniciada');
Route::patch('/usuario/{id}/edit',[UsuariosController::class,'update']);

Route::get('/calendario', function(){
    return view("landing.landing-calendario");
});
Route::get('/calendario/panel', function(){
    return view("landing.landing-calendario-panel");
});

Route::get('/donadores/{id}/show',[DonatorController::class, 'show'])->middleware('sesionIniciada');

Route::get('/donaciones',[LandingController::class, 'donaTexts']);


Route::resource('donadores',DonadoresController::class);
Route::get('/donadores',[DonadoresController::class,'index'])->middleware('sesionIniciada');
Route::get('/donadores/desaprobados',[DonadoresController::class,'recuperarDonadoresNoAprobados'])->name('desaprobados');
Route::get('/donadores/aprobados',[DonadoresController::class,'recuperarDonadoresAprobados'])->name('aprobados');





//rutas para el controlador de login y logout


//use App\Http\Controllers\Auth\UserAuthController;



/** 
 * Rutas para el manejo de la seccion de ninos
 */

//registrar niño

Route::resource('/registrar-ninos',ChildrenController::class);

Route::get('/registrar-ninos',[ChildrenController::class,'create'])->middleware('sesionIniciada')->name('register');
Route::post('/registrar-ninos',[ChildrenController::class,'store']);

//view
Route::get('/registrar-ninos/{id}/see',[ChildrenController::class,'show']);




 //main
Route::get('/ninos',[ChildrenController::class,'index'])->middleware('sesionIniciada')->name('lista_ninos');
Route::get('/ninos/search',[ChildrenController::class,'recuperarNinos'])->name('buscar_ninos');

//edit
Route::post('/ninosadd',[UsuariosController::class,'addninos'])->middleware('sesionIniciada');

Route::resource('ninos',ChildrenController::class);
Route::get('/ninos/{id}/edit',[ChildrenController::class,'edit'])->name('editninos')->middleware('sesionIniciada');
Route::patch('/ninos/{id}/edit',[ChildrenController::class,'update']);





/** 
 * Rutas para el controlador de login y logout 
*/
Route::get('login',[UserAuthController::class,'login'])->middleware('sesionYaIniciada')->name('login');
Route::post('check',[UserAuthController::class,'check'])->name("auth.check");
Route::get('panel',[UserAuthController::class,'panel'])->middleware('sesionIniciada');
Route::get('logout',[UserAuthController::class,'logout'])->name('logout');


/*
Ruta para editar contenido 
*/
Route::get('contenido', [ContenidoController::class,'index'])->middleware('sesionYaIniciada');
Route::get('contenido/edit/{id}', [ContenidoController::class,'edit'])->middleware('sesionYaIniciada');
Route::post('contenido/{id}', [ContenidoController::class,'update'])->middleware('sesionYaIniciada');




Route::get('atencion', [NosotrosController::class,'indexat'])->middleware('sesionYaIniciada');
//Route::delete('/atencion/eliminar/{id}', [NosotrosController::class,'eliminarat'])->middleware('sesionYaIniciada');
Route::delete('/atencion/{id}', [NosotrosController::class,'eliminarat'])->middleware('sesionYaIniciada');
Route::get('atencion/registrar-nuevo', [NosotrosController::class,'createarea'])->middleware('sesionYaIniciada');
Route::post('atencion/registrar', [NosotrosController::class,'storearea'])->middleware('sesionYaIniciada');

Route::get('educacion', [NosotrosController::class,'indexed'])->middleware('sesionYaIniciada');
Route::delete('/educacion/eliminar/{id}', [NosotrosController::class,'eliminaredu'])->middleware('sesionYaIniciada');
Route::get('educacion/registrar-nuevo', [NosotrosController::class,'createedu'])->middleware('sesionYaIniciada');
Route::post('educacion/registrar', [NosotrosController::class,'storeedu'])->middleware('sesionYaIniciada');
Route::get('/panel/galeria',[GaleriaController::class,'index'])->name('galeria-panel');
Route::get('/panel/galeria/publicar-imagen',[GaleriaController::class,'displayForm']);
Route::post('/panel/galeria/publicar-imagen',[GaleriaController::class,'publicarForm']);
Route::any('/panel/galeria/delete/{id}',[GaleriaController::class,'delete']);

Route::get('/galeria',GaleriaHomeController::class)->name('galeria');


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
