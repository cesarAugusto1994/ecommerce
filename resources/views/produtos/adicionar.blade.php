@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Adicionar Produto</div>

                    <div class="panel-body">

            <form class="form-horizontal" method="POST" action="{{  route('produtos_salvar')  }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nome" class="col-md-2 control-label">Nome</label>
                    <div class="col-md-10">
                        <input id="nome" type="text" class="form-control" name="nome" required autofocus>
                    </div>
                </div>


                <div class="form-group">
                    <label for="descricao" class="col-md-2 control-label">Descricao</label>
                    <div class="col-md-10">
                        <textarea id="descricao" type="text" class="form-control" name="descricao" required></textarea>
                    </div>
                </div>


                <div class="form-group">
                    <label for="quantidade" class="col-md-2 control-label">Quantidade</label>
                    <div class="col-md-10">
                        <input id="quantidade" type="text" class="form-control" name="quantidade" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="valor" class="col-md-2 control-label">Valor</label>
                    <div class="col-md-10">
                        <input id="valor" type="text" class="form-control" name="valor" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="categoria_id" class="col-md-2 control-label">Categoria</label>
                    <div class="col-md-10">
                        <select class="form-control" id="categoria_id" name="categoria_id" required>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id  }}">{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="marca_id" class="col-md-2 control-label">Marca</label>
                    <div class="col-md-10">
                        <select class="form-control" id="marca_id" name="marca_id" required>
                            @foreach($marcas as $marca)
                                <option value="{{ $marca->id  }}">{{ $marca->nome }}</option>
                            @endforeach
                        </select>
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