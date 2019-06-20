@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastro de Funcionários</div>

                <div class="card-body">

                    <div class="col-md-12 row">
                            <div class="col-md-4">
                                <label> Nome </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                    <label> Matricula </label>
                                    <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                    <label> Cargo </label>
                                    <input type="text" class="form-control">
                            </div>
                    </div>

                    <div class="col-md-12 row">
                            <div class="col-md-4">
                                <label> Titulação </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                    <label> Usuário </label>
                                    <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                    <label> Senha </label>
                                    <input type="password" class="form-control">
                            </div>
                    </div>

                    <br/>

                    <div class="col-md-12 row justify-content-center">
                        <button type="button" class="btn btn-danger" style="margin-right: 20px" > Cancelar </button>
                        <button type="button" class="btn btn-primary" > Salvar </button>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
