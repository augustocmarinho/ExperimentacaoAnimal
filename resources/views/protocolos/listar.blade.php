@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('flash-message')
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8"><h5>Listagem de Protocolos</h5></div>
                        <div class="col-md-4" style="text-align:right"> <a href="{{ url('/protocolo/cadastrar') }}" class="btn btn-primary" style="align">Novo</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/protocolo/getByName">
                        <div class="row col-md-12" style="text-align:right">
                            <div class="col-md-10"> <input class="form-control" name="nome" placeholder="Pesquisar por nome"> </div>
                            <div class="col-md-2"> <button class="btn btn-primary" type="submit">Pesquisar</button> </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Responsável</th>
                                <th scope="col">Status</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($protocolo as $key) { ?>
                                <tr>
                                    <th scope="row"><?=$key->id?></th>
                                    <td><?=$key->nome?></td>
                                    <td><?=$key->status?></td>
                                    <td>
                                        <a href="/funcionarios/edit?id=<?=$key->id?>"><i class="fas fa-edit"></i></a> 
                                        <a href="#" onclick="confirmDelete('<?=$key->id?>');" data-toggle="modal" data-target="#Modal"><i class="fas fa-trash"></i></a>
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
      document.getElementById("modal-btn-confirm").href="/protocolo/delete?id="+id; 
  }
</script>

@endsection
