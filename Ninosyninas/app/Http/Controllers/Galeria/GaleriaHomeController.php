<?php

namespace App\Http\Controllers\Galeria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GaleriaHomeController extends Controller
{
    public function __invoke(){
        return view('galeria.galeria-home');
    }
}
