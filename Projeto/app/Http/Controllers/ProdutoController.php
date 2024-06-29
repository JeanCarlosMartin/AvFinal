<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        produto::create(['nome'=>$request->nome, 'tipo'=>$request->tipo, 'tamanho'=>$request->tamanho, 'preco'=>$request->preco]);
        return "Produto criado";
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto= produto::findOrFail($id);
        return view('layouts.mostrar', ['produto'=>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto= produto::findOrFail($id);

        return view('layouts.editar',['produto'=>$produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request, $id);
        //$id=$request->id;
        $produto=produto::findOrFail($id);

        dd($produto);

        $produto::update([
            'nome'=>$request->nome,
            'tipo'=>$request->tipo,
            'tamanho'=>$request->tamanho,
            'preco'=>$request->preco,
        ]);

            return "Produto atualizado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $produto= Produto::findOrFail($id);
        return view('layouts.deletar',['produto'=>$produto]);
    }
     
     public function destroy($id)
    {
        $produto= Produto::findOrFail($id);
        $produto->delete();
        return 'produto deletado';
    }
}
