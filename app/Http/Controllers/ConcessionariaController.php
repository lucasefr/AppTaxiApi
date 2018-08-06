<?php

namespace App\Http\Controllers;

use App\Concessionaria;
use Illuminate\Http\Request;

class ConcessionariaController extends Controller
{
    public function __construct(){
		//
		$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Concessionaria::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        Concessionaria::create($request->all());
        return $request->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $concessionaria = new Concessionaria;
        $concessionaria->nome = $request->nome;
        $concessionaria->endereco = $request->endereco;
        $concessionaria->numero = $request->numero;
        $concessionaria->bairro = $request->bairro;
        $concessionaria->cidade = $request->cidade;
        $concessionaria->complemento = $request->complemento;
        $concessionaria->uf = $request->uf;
        $concessionaria->cep = $request->cep;
        $concessionaria->telefone = $request->telefone;
        $concessionaria->save();
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Concessionaria  $concessionaria
     * @return \Illuminate\Http\Response
     */
    public function show(Concessionaria $concessionaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Concessionaria  $concessionaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Concessionaria $concessionaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Concessionaria  $concessionaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concessionaria $concessionaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Concessionaria  $concessionaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concessionaria $concessionaria)
    {
        //
    }
}
