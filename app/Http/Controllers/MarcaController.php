<?php

namespace App\Http\Controllers;

use App\Marca;
use Request;

class MarcaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('marcas/lista')->with('marcas', Marca::all());
    }

    public function salvar()
    {
        Marca::create(Request::all());
        return redirect()->action('MarcaController@index');
    }

    public function editar($id)
    {
        $marca = Marca::find($id);
        return view('marcas/editar')->with('marca', $marca);
    }

    public function salvarEdicao()
    {
        $marca = Marca::find(Request::input('id'));

        $marca->nome = Request::input('nome');
        $marca->save();

        return redirect()->action('MarcaController@index');
    }
}
