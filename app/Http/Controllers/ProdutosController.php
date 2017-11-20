<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Marca;
use App\Produto;
use App\Vitrine;
use Request;

class ProdutosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $produtos =  Produto::orderBy('ativo', 'desc')->get();

        return view('produtos/lista')->with('produtos', $produtos);
    }

    public function criar()
    {
        return view('produtos/adicionar')
            ->with('categorias', Categoria::all())
            ->with('marcas', Marca::all());
    }

    public function salvar()
    {
        Produto::create(Request::all());
        return redirect()->action('ProdutosController@index');
    }

    public function editar($id)
    {
        $produto = Produto::find($id);
        return view('produtos/editar')->with('produto', $produto)
            ->with('categorias', Categoria::all())
            ->with('marcas', Marca::all());
    }

    public function salvarEdicao()
    {
        $produto = Produto::find(Request::input('id'));

        $produto->nome = Request::input('nome');
        $produto->descricao = Request::input('descricao');
        $produto->quantidade = Request::input('quantidade');
        $produto->valor = Request::input('valor');
        $produto->categoria_id = Request::input('categoria_id');
        $produto->marca_id = Request::input('marca_id');

        $produto->save();

        return redirect()->action('ProdutosController@index');
    }

    public function alterarStatus($id)
    {
        $produto = Produto::find($id);

        $produto->ativo = !$produto->ativo;

        $produto->save();

        return redirect()->action('ProdutosController@index');
    }


}
