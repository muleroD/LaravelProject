<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class ProdutoController extends Controller
{

    public function listaProdutos()
    {
        $produtos = DB::select('select * from produtos');
        return view('produto/listagem')->with('produtos', $produtos);
    }

    public function exibeProduto()
    {
        $id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($produto))
            return "<h1 class='text-danger'>Esse produto não existe</h1>";

        return view('produto/detalhes')->with('p', $produto[0]);
    }

    public function novo()
    {
        return view('produto/formulario');
    }

    public function adicionaProduto()
    {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        $descricao = Request::input('descricao');

        DB::insert('insert into produtos (nome, valor, quantidade, descricao) values (?,?,?,?)', array($nome, $valor, $quantidade, $descricao));

        return redirect('/produtos')->withInput(Request::only('nome'));

        // Ou
        // return redirect()
        //     ->action('ProdutoController@lista')
        //     ->withInput(Request::only('nome'));
    }

    public function produtosJSON()
    {
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);
    }
}