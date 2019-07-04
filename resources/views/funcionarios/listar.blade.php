@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <?php // Automatizar Essa parte dos alerts depois
            if(isset($result)){
                if($result==1){
                    echo '
                        <div class="alert alert-success fade show col-md-8" role="alert">
                            Cadastrado com Sucesso
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                }else {
                    echo '
                        <div class="alert alert-danger fade show col-md-8" role="alert">
                            Algum erro aconteceu.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                }
            }    
        ?>
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
                                    <td><i class="fas fa-edit"></i> <i class="fas fa-trash"></i></td>
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
