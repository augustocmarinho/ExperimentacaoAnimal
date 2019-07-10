
@extends('layouts.template') 

@section('content') 
  
<div class="container">
    <div class="row justify-content-center">
        @include('flash-message')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                     <div class="col-md-8"> Listagem de Animais </div>
                     <div class="col-md-4" style="text-align:right"> <a href="{{ url('/animais/cadastrar') }}" class="btn btn-primary" style="align">Novo</a></div>
                 </div>
             </div>
             <br>
             <form action="/animais/getByName">
                <div class="row col-md-12" style="text-align:right">
                    <div class="col-md-10"> <input class="form-control" name="nome" placeholder="Pesquisar por espécie"> </div>
                    <div class="col-md-2"> <button class="btn btn-primary" type="submit">Pesquisar</button> </div>
                </div>
            </form>
             <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Espécie</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Biotério</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($animais as $key) { ?>
                            <tr>
                                <th scope="row"><?=$key->codigo?></th>
                                <td><?=$key->especie?></td>
                                <td><?=$key->quantidade?></td>
                                <td><?=$key->codBioterio?></td>
                                <td>
                                    <a href="/animais/edit?codigo=<?=$key->codigo?>"><i class="fas fa-edit"></i></a> 
                                    <a href="#" onclick="confirmDelete('<?=$key->codigo?>');" data-toggle="modal" data-target="#Modal"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div> 
</div> 

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="Modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
            <span id="text-delete">Tem certeza que deseja apagar o registro?</span>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="modal-btn-no" data-dismiss="modal">Cancelar</button>
        <a type="button" href="#" class="btn btn-danger" id="modal-btn-confirm">Deletar</a>
      </div>
    </div>
  </div>
</div>

<script>
    function confirmDelete(id){
        document.getElementById("modal-btn-confirm").href="/animais/delete?id="+id; 
    }
</script>

@endsection
