<?php

namespace App\Http\Controllers;

use App\Models\Donadores;
use Illuminate\Http\Request;

class DonadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("landing-registro-don");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("landing-registro-don");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosDonador = request()-> all();
       $datosDonador = request()-> except('_token');
       Donadores::insert($datosDonador);
        return response()->json($datosDonador);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donadores  $donadores
     * @return \Illuminate\Http\Response
     */
    public function show(Donadores $donadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donadores  $donadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Donadores $donadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donadores  $donadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donadores $donadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donadores  $donadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donadores $donadores)
    {
        //
    }
}
