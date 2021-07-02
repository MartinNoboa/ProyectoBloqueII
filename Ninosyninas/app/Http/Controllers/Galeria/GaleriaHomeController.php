<?php

namespace App\Http\Controllers\Galeria;

use App\Http\Controllers\Controller;
use App\Models\galleries;
use Illuminate\Http\Request;

class GaleriaHomeController extends Controller
{
    public function __invoke(){
        $galleries=galleries::paginate(12);
        return view('galeria.galeria-home',[
            'galleries'=>$galleries]);
    }
}
