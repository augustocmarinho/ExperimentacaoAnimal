@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastro de Funcionários</div>
                    <div class="card-body">
                        <form action="/funcionarios/update" method="GET">
                            @include('funcionarios/form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validasenha(){ //Colocar validação do form, se não tiver batendo, não deixar dar o submit
      if ($('#password').val() == $('#senhaConfirm').val()) {
            $('#message').html('').css('color', 'green');
      } else 
            $('#message').html('Senhas não correspondem').css('color', 'red');
    };
    </script>
@endsection
