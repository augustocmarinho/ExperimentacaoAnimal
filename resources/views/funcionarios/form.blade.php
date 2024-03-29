<div class="col-md-12 row">
        <div class="col-md-4">
            <label> Nome </label>
            <input name="nome" type="text" class="form-control" value="{{ $funcionarios->nome ?? null }}" required>
        </div>
        <div class="col-md-4">
            <label> Matricula </label>
            <input name="matricula" type="text" class="form-control" value="{{ $funcionarios->matricula ?? null }}" required>
        </div>
        <div class="col-md-4">
            <label> Cargo </label>
            <input name="cargo" type="text" class="form-control" value="{{ $funcionarios->cargo ?? null }}" required>
        </div>
</div>
<br>
<div class="col-md-12 row">
    <div class="col-md-6">
        <label> Titulação </label>
        <select name="titulacao" class="form-control" required>
            <option>{{ $funcionarios->titulacao ?? null }}</option>
            <option>Graduado</option>
            <option>Pós-Graduado</option>
            <option>Mestre</option>
            <option>Doutor</option>
            <option>PHD</option>
        </select>
    </div>
    <div class="col-md-6">
        <label> Tipo </label>
        <select name="tipo" class="form-control" required>
            <option> {{ $funcionarios->tipo ?? null }} </option>
            <option>Parecerista </option>
            <option>Solicitante </option>
        </select>
    </div>
</div>
<br>
<div class="col-md-12 row">
    <div class="col-md-4">
        <label> Email </label>
        <input name="email" type="email" class="form-control" autocomplete="off" required value="{{ $funcionarios->email ?? null }}">
    </div>
    <div class="col-md-4">
        <label> Senha </label>
        <input name="password" id="password" type="password" class="form-control" required autocomplete="off" >
    </div>
    <div class="col-md-4">
        <label> Confirmação de Senha </label>
        <input type="password" onkeyup="validasenha()" name="senhaConfirm" id="senhaConfirm" class="form-control" required autocomplete="off">
        <span id='message'></span>
    </div>
    <?php if(isset($funcionarios)){ ?> 
        <div class="col-md-12 row justify-content-center"> <label> Deixar Campos senha em branco caso não queira alterar </label> </div>
    <?php } ?>
</div>

<br/>

<div class="col-md-12 row justify-content-center">
    <?php if(isset($funcionarios)){ ?> 
    <input type="hidden" name="id" value="{{ $funcionarios->id ?? null }}">
    <?php } ?>
    <a class="btn btn-danger" style="margin-right: 20px" href="/funcionarios/listar"> Cancelar </a>
    <button type="submit" class="btn btn-primary" > Salvar </button>
</div>