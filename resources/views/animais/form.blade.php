<div class="col-md-12 row">
    <div class="col-md-4">
        <label> Espécie </label>
        <input name="especie" type="text" class="form-control" value="{{ $animais->especie ?? null }}">
    </div>
    <div class="col-md-4">
        <label> Quantidade </label>
        <input name="quantidade" type="number" class="form-control" value="{{ $animais->quantidade ?? null }}">
    </div>
    <div class="col-md-4">
        <label> Biotério </label>
        <select name="codBioterio" class="form-control">
            <option> {{ $animais->tipo ?? null }} </option>
            <option>2</option>
            <option>3</option>
        </select>
    </div> 
</div> 
<br/> 
<div class="col-md-12 row justify-content-center">
    <?php if(isset($animais)){ ?>
        <input type="hidden" name="id" value="{{ $animais->codigo ?? null }}">
    <?php } ?>
    <button type="button" class="btn btn-danger" style="margin-right: 20px" > Cancelar </button>
    <button type="submit" class="btn btn-primary" > Salvar </button>
</div>
