<?php

namespace App\Http\Controllers;

use App\Imagem;
use App\Produto;
use Request;

class ImagensController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adicionar($id)
    {
        $produto = Produto::find($id);
        return view('imagens/adicionar')->with('produto', $produto);
    }

    public function salvar()
    {

        $produto = Produto::find(Request::input('id'));

        $imagem1 = Request::input('imagem_1');
        $imagem2 = Request::input('imagem_2');
        $imagem3 = Request::input('imagem_3');
        $imagem4 = Request::input('imagem_4');

        if (!empty($imagem1)) {
            $img = new Imagem();
            $img->produto_id = $produto->id;
            $img->titulo = "Uma Imagem";
            $img->link = $imagem1;
            $img->save();
        }

        if (!empty($imagem2)) {
            $img = new Imagem();
            $img->produto_id = $produto->id;
            $img->titulo = "Uma Imagem";
            $img->link = $imagem2;
            $img->save();
        }

        if (!empty($imagem3)) {
            $img = new Imagem();
            $img->produto_id = $produto->id;
            $img->titulo = "Uma Imagem";
            $img->link = $imagem3;
            $img->save();
        }

        if (!empty($imagem4)) {
            $img = new Imagem();
            $img->produto_id = $produto->id;
            $img->titulo = "Uma Imagem";
            $img->link = $imagem4;
            $img->save();
        }

        return redirect()->action('ProdutosController@index');
    }
}
