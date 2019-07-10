@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                     <div class="col-md-8"> Listagem de Biotérios </div>
                     <div class="col-md-4" style="text-align:right"> <a href="{{ url('/bioterios/cadastrar') }}" class="btn btn-primary" style="align">Novo</a></div>
                 </div>
             </div>
             <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Local</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bioterios as $key) { ?>
                            <tr>
                                <th scope="row"><?=$key->id?></th>
                                <td><?=$key->nome?></td>
                                <td><?=$key->local?></td>
                                <td><a href="/bioterios/edit?id=<?=$key->id?>"><i class="fas fa-edit"></i></a> <a href="/bioterios/delete?id=<?=$key->id?>"><i class="fas fa-trash"></i></a></td>
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
