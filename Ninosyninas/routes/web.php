<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;

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


Route::get('/', [landingController::class, 'homeTexts']);

Route::get('/nosotros', [landingController::class, 'nosotrosTexts']);

Route::get('/contactanos', function(){
    return view("landing-contacto");
});

Route::get('/nosotros-areas', [landingController::class, 'areasTexts']);

Route::get('/nosotros-logros', [landingController::class, 'logroText']);

Route::get('/nosotros-ayuda', function(){

    return view("nosotros-ayuda");
});

Route::get('/calendario', function(){
    return view("landing-calendario");
});

Route::get('/noticias', [landingController::class, 'noticiasTexts']);