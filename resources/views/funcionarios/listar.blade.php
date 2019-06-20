@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                   <div class="col-md-8"> Listagem de Funcionários </div>
                   <div class="col-md-4" style="text-align:right"> <a href="{{ url('/funcionarios/cadastrar') }}" class="btn btn-primary" style="align">Novo</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Augusto Marinho</td>
                                <td>Gerente</td>
                                <td><i class="fas fa-edit"></i> <i class="fas fa-trash"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Kevin Oliveira</td>
                                <td>Programador</td>
                                <td><i class="fas fa-edit"></i> <i class="fas fa-trash"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Crijina Chagas</td>
                                <td>Professora</td>
                                <td><i class="fas fa-edit"></i> <i class="fas fa-trash"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
