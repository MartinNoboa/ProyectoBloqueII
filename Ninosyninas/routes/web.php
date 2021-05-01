<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [LandingController::class, 'homeTexts']);

Route::get('/nosotros', [LandingController::class, 'nosotrosTexts']);

Route::get('/contactanos', function(){
    return view("landing-contacto");
});

Route::get('/nosotros-areas', [LandingController::class, 'areasTexts']);

Route::get('/nosotros-logros', [LandingController::class, 'logroText']);

Route::get('/nosotros-ayuda', function(){

    return view("nosotros-ayuda");
});

Route::get('/calendario', function(){
    return view("landing-calendario");
});

Route::get('/noticias', [LandingController::class, 'noticiasTexts']);


//Probar conexion a base de datos (Exitosa en PC, pendiente en Mac)
Route::get('/test-bd', function(){
    try{
        DB::connection()->getPdo();
        echo "Jalo la conexion a " . DB::connection()->getDatabasename();
    }catch(Exception $e){
        die("Cannot connect to the database. Error: " . $e);
    }
});