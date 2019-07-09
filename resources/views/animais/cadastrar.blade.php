@extends('layouts.template') @section('content') <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastro de Animais</div>
                <div class="card-body">
                    <form action="/animais/store" method="GET">
                        @include('animais/form')
                    </form>
                </div>
            </div>
        </div>
    </div> </div> @endsection
