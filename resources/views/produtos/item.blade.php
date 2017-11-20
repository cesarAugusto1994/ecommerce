@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Produto</div>

                    <div class="panel-body">

                        <a href="{{ route('produto_status', ['id' => $produto->id]) }}">{{ $produto->ativo ? 'Inativar' : 'Ativar' }}</a>
                        <br/>
                        <br/>

                        <label>Nome: {{ $produto->nome }}</label>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="imagens" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form class="form-horizontal" method="POST" action="{{ route('imagens_salvar') }}">
                    {{ csrf_field() }}

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Imagens</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="nome" class="col-md-2 control-label">Imagem 1</label>
                            <div class="col-md-10">
                                <input id="nome" type="text" class="form-control" name="imagem_1" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nome" class="col-md-2 control-label">Imagem 2</label>
                            <div class="col-md-10">
                                <input id="nome" type="text" class="form-control" name="imagem_2" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nome" class="col-md-2 control-label">Imagem 3</label>
                            <div class="col-md-10">
                                <input id="nome" type="text" class="form-control" name="imagem_3" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nome" class="col-md-2 control-label">Imagem 4</label>
                            <div class="col-md-10">
                                <input id="nome" type="text" class="form-control" name="imagem_4" required autofocus>
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