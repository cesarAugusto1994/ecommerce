@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">


            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>

                    <div class="panel-body">

            <table class="table">

                <thead>
                <tr>
                    <td></td>
                    <td>Nome</td>
                    <td>E-mail</td>
                </tr>
                </thead>

                <tbody>

                @foreach($usuarios as $usuario)
                <tr>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="{{ route('users_editar', ['id' => $usuario->id])  }}">Editar</a></li>
                                <li><a href="{{ route('users_excluir', ['id' => $usuario->id])  }}">Excluir</a></li>
                            </ul>
                        </div>
                    </td>
                    <td>{{ $usuario->name  }}</td>
                    <td>{{ $usuario->email  }}</td>
                </tr>
                @endforeach

                </tbody>

            </table>

        </div>
    </div>

            </div>
        </div>
    </div>

@endsection