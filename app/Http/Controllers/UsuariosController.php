<?php

namespace App\Http\Controllers;

use App\Usuarios;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios =  Usuarios::all();

        return view('usuarios/lista')->with('usuarios', $usuarios);
    }

    public function editar($id)
    {
        $usuario =  Usuarios::find($id);
        return view('usuarios/editar')->with('usuario', $usuario);
    }

    public function salvarEdicao()
    {
        $usuario = Usuarios::find(Request::input('id'));

        $usuario->nome = Request::input('nome');
        $usuario->email = Request::input('email');
        $usuario->save();

        return redirect()->action('UsuariosController@index');
    }

    public function excluir($id)
    {
        $usuario =  Usuarios::find($id);
        $usuario->destroy($id);

        return redirect()->action('UsuariosController@index');
    }
}
