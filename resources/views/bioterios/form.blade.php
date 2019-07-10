<div class="col-md-12 row">
    <div class="col-md-4">
        <label> Nome </label>
        <input name="nome" type="text" class="form-control" value="{{ $bioterios->nome ?? null }}">
    </div>
    <div class="col-md-4">
        <label> Local </label>
        <input name="local" type="text" class="form-control" value="{{ $bioterios->local ?? null }}">
    </div>
</div>

<br/>

<div class="col-md-12 row justify-content-center">
    <?php if(isset($bioterios)) { ?>
        <input type="hidden" name="id" value="{{ $bioterios->id ?? null }}">
    <?php } ?>
    <a href="/bioterios/listar" class="btn btn-danger" style="margin-right: 20px" > Cancelar </a>
    <button type="submit" class="btn btn-primary" > Salvar </button>
</div>
