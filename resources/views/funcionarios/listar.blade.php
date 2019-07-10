@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('flash-message')
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
                            <?php foreach ($funcionarios as $key) { ?>
                                <tr>
                                    <th scope="row"><?=$key->id?></th>
                                    <td><?=$key->nome?></td>
                                    <td><?=$key->cargo?></td>
                                    <td><a href="/funcionarios/edit?id=<?=$key->id?>"><i class="fas fa-edit"></i></a> <a href="/funcionarios/delete?id=<?=$key->id?>"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
