@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Adicionar Imagens</div>

                    <div class="panel-body">

            <form class="form-horizontal" method="POST" action="{{  route('imagens_salvar')  }}">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $produto->id }}">


                <div class="form-group">
                    <label for="nome" class="col-md-2 control-label">Imagem 1</label>
                    <div class="col-md-10">
                        <input id="nome" type="text" class="form-control" name="imagem_1" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nome" class="col-md-2 control-label">Imagem 2</label>
                    <div class="col-md-10">
                        <input id="nome" type="text" class="form-control" name="imagem_2">
                    </div>
                </div>

                <div class="form-group">
                    <label for="nome" class="col-md-2 control-label">Imagem 3</label>
                    <div class="col-md-10">
                        <input id="nome" type="text" class="form-control" name="imagem_3" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="nome" class="col-md-2 control-label">Imagem 4</label>
                    <div class="col-md-10">
                        <input id="nome" type="text" class="form-control" name="imagem_4">
                    </div>
                </div>

                <button class="btn btn-success btn-sm">Salvar</button>

            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection