@extends('layouts.template') @section('content') <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                     <div class="col-md-8"> Listagem de Animais </div>
                     <div class="col-md-4" style="text-align:right"> <a 
href="{{ url('/animais/cadastrar') }}" class="btn btn-primary" 
style="align">Novo</a></div>
                 </div>
             </div>
             <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Espécie</th>
                            <th scope="col">Biotério</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($animais as $key) { ?>
                            <tr>
                                <th scope="row"><?=$key->codigo?></th>
                                <td><?=$key->especie?></td>
                                <td><?=$key->codBioterio?></td>
                                <td><?=$key->quantidade?></td>
                                <td><a 
href="/animais/delete?id=<?=$key->codigo?>"><i class="fas 
fa-trash"></i></a></td>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> </div> </div> @endsection
