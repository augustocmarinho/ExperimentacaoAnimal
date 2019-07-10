@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastro de Biotérios</div>
                    <div class="card-body">
                        <form action="/bioterios/update" method="GET">
                            @include('bioterios/form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
