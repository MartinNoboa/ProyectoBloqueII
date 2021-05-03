<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Donator;
use  App\Models\Donadores;
Use Session;
Use Redirect;


class DonatorController extends Controller
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
       $datosDonador = request()-> except('_token');
       Donadores::insert($datosDonador);
       $message='Sus datos para registro han sido enviados con éxito';
       //return redirect()->route('donadores')->with('mensaje','Usuario editado con éxito');
       //Redirect::to('/yourroute')->with('mensaje','Usuario editado con éxito');
       //return view('landing-registro-don')->with('mensaje','Sus datos para registro han sido enviados con éxito');
        //return view("landing-registro-don")->with('mensaje','Sus datos para registro han sido enviados con éxito');
         return view("landing-registro-don", ["message" => $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donadores=Donadores::findOrFail($id);
        return view('donadores.see',compact('donadores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
