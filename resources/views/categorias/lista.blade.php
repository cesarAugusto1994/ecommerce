@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">


            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Categorias</div>

                    <div class="panel-body">

            <a data-toggle="modal" data-target="#categorias" class="btn btn-success btn-sm">Adicionar</a>
            <br/>
            <br/>

            <table class="table">

                <thead>
                <tr>
                    <td></td>
                    <td>Nome</td>
                </tr>
                </thead>

                <tbody>

                @foreach($categorias as $categoria)
                <tr>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ route('categorias_editar', ['id' => $categoria->id])  }}">Editar</a></li>
                            </ul>
                        </div>
                    </td>
                    <td>{{ $categoria->nome  }}</td>
                </tr>
                @endforeach

                </tbody>

            </table>

        </div>
    </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="categorias" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form class="form-horizontal" action="{{ route('categorias_salvar') }}" method="POST">
                    {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Adicionar Categoria</h4>
                </div>
                <div class="modal-body">

                        <div class="form-group">
                            <label for="nome" class="col-md-2 control-label">Nome</label>
                            <div class="col-md-10">
                                <input id="nome" type="text" class="form-control" name="nome" required autofocus>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>

        </div>
    </div>

@endsection