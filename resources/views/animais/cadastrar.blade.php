@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastro de Animais</div>

                <div class="card-body">

                    <div class="col-md-12 row">
                            <div class="col-md-4">
                                <label> Espécie </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                    <label> Quantidade </label>
                                    <input type="number" class="form-control">
                            </div>
                            <div class="col-md-4">
                                    <label> Biotério </label>
                                    <select class="form-control">
                                        <option> Biotério 1 </option>
                                        <option> Biotério 2 </option>
                                        <option> Biotério 3 </option>
                                    </select>
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
