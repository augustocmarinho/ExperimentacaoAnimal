@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastro de Funcionários</div>
                <form action="/funcionarios/store">
                <div class="card-body">

                    <div class="col-md-12 row">
                            <div class="col-md-4">
                                <label> Nome </label>
                                <input name="nome" type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label> Matricula </label>
                                <input name="matricula" type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label> Cargo </label>
                                <input name="cargo" type="text" class="form-control">
                            </div>
                    </div>
                    <br>
                    <div class="col-md-12 row">
                        <div class="col-md-6">
                            <label> Titulação </label>
                            <input name="titulacao" type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label> Tipo </label>
                            <select name="tipo" class="form-control">
                                <option>Parecerista </option>
                                <option>Solicitante </option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <label> Usuário </label>
                            <input name="login" type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-md-4">
                            <label> Senha </label>
                            <input name="senha" type="password" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-md-4">
                            <label> Confirmação de Senha </label>
                            <input type="passwordConfirm" class="form-control" autocomplete="off">
                        </div>
                    </div>

                    <br/>

                    <div class="col-md-12 row justify-content-center">
                        <button type="button" class="btn btn-danger" style="margin-right: 20px" > Cancelar </button>
                        <button type="submit" class="btn btn-primary" > Salvar </button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
