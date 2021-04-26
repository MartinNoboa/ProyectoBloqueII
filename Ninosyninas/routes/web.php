<?php

use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LandingController;

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


Route::get('/home', function(){
    return view('home');
});


Route::get('/', [LandingController::class, 'homeTexts']);

Route::get('/nosotros', [LandingController::class, 'nosotrosTexts']);

Route::view ('/contactanos','landing-contacto')->name('landing-contacto');

Route::post('landing-contacto', 'App\Http\Controllers\MessagesController@store');

Route::get('/home', function(){
    
    return view("home");
});

Route::get('/donaciones', function(){
    
    return view("landing-donaciones");
});



Route::get('/nosotros-areas', [LandingController::class, 'areasTexts']);

Route::get('/nosotros-logros', [LandingController::class, 'logroText']);

Route::get('/nosotros-ayuda', function(){

    return view("nosotros-ayuda");

});

Route::get('/noticias', [LandingController::class, 'noticiasTexts']);

Route::get('/registrar-usuario',[RegisterController::class,'index'])->name('register');
Route::post('/registrar-usuario',[RegisterController::class,'store']);

Route::get('/usuarios',[UsuariosController::class,'index'])->name('lista_usuarios');
Route::get('/usuarios/search',[UsuariosController::class,'search'])->name('UsuariosController.search');

Route::post('/usuarioadd',[UsuariosController::class,'addUsuario']);
Route::resource('usuario',UsuariosController::class);
Route::get('/usuario/{id}/edit',[UsuariosController::class,'edit'])->name('editUser');
Route::patch('/usuario/{id}/edit',[UsuariosController::class,'update']);

Route::get('/calendario', function(){
    return view("landing-calendario");
});


use App\Http\Controllers\DonatorController;
Route::resource('donador',DonatorController::class);





//rutas para el controlador de login y logout
use App\Http\Controllers\UserAuthController;

Route::get('login',[UserAuthController::class,'login'])->middleware('sesionYaIniciada')->name('login');
Route::post('check',[UserAuthController::class,'check'])->name("auth.check");
Route::get('panel',[UserAuthController::class,'panel'])->middleware('sesionIniciada');
Route::get('logout',[UserAuthController::class,'logout']);




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
