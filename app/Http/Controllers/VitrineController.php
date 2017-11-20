<?php

namespace App\Http\Controllers;

use App\Vitrine;
use Request;
use Symfony\Component\HttpFoundation\Response;

class VitrineController extends Controller
{
    public function adicionar()
    {
        $id = Request::input('produto_id');

        $hasPorduto = Vitrine::where('produto_id', $id)->where('ativo', 1)->get();

        if ($hasPorduto) {
            //return new Response('Produto ja foi adicionado a vitrine.');
        }

        Vitrine::create(Request::all());
        return new Response('Produto adicionado a vitrine.');
    }

    public function remover($id)
    {
        $vitrine = Vitrine::find($id);
        $vitrine->destroy();

        return redirect()->back()->with('mensagem', 'Produto removido da vitrine.');
    }
}
