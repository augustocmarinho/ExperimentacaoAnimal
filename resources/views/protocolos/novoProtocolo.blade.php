@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('flash-message')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>Novo Protocolo<h5></div>
                <div class="card-body">
                    <form id="regForm" action="/protocolos/store">
                        <div class="tab">
                            <div class="col-md-12 row">
                                <div class="col-md-4">
                                    <label> Solicitante </label>
                                    <select name="IDsolicitante" oninput="this.className = 'form-control'"
                                        class="form-control" required>
                                        <option disabled selected></option>
                                        <?php foreach ($funcionarios as $key ) { ?>
                                        <option value="{{$key->id}}">
                                            {{$key->nome}}
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label> Data Inicio </label>
                                    <input name="dtInicio" type="date" class="form-control"
                                        oninput="this.className = 'form-control'" value="{{ null }}">
                                </div>
                                <div class="col-md-4">
                                    <label> Data Fim </label>
                                    <input name="dtFim" type="date" class="form-control"
                                        oninput="this.className = 'form-control'" value="{{ null }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="tab">
                            <div class="col-md-12 row">
                                <div class="col-md-4">
                                    <label> Especie </label>
                                    <select name="IDanimal" oninput="this.className = 'form-control'"
                                        class="form-control" required>
                                        <option disabled selected></option>
                                        <?php foreach ($animais as $key ) { ?>
                                        <option value="{{$key->codigo}}">
                                            {{$key->especie}}
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label> Quantidade </label>
                                    <input name="quantidade" type="number" class="form-control"
                                        oninput="this.className = 'form-control'" value="{{ null }}">
                                </div>
                                <div class="col-md-4">
                                    <label> Bioterio </label>
                                    <select name="IDbioterios" oninput="this.className = 'form-control'"
                                        class="form-control" required>
                                        <option disabled selected></option>
                                        <?php foreach ($bioterios as $key ) { ?>
                                        <option value="{{$key->id}}">
                                            {{$key->nome}}
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="tab">
                            <div class="col-md-12 row">
                                <div class="col-md-12">
                                    <label>Justificativa</label>
                                    <textarea name="justificativa" class="form-control"
                                        oninput="this.className = 'form-control'" required rows="7"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 row">
                                <div class="col-md-12">
                                    <label>Resumo Português</label>
                                    <textarea name="resumoPortugues" class="form-control"
                                        oninput="this.className = 'form-control'" required rows="7"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 row">
                                <div class="col-md-12">
                                    <label>Resumo Ingles</label>
                                    <textarea name="resumoIngles" class="form-control"
                                        oninput="this.className = 'form-control'" required rows="7"></textarea>
                                </div>
                            </div>
                            <input name="status" type="hidden" value="Aguardando envio para parecer">
                        </div>
                        <br>
                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" class="btn btn-danger" id="prevBtn"
                                    onclick="nextPrev(-1)">Voltar</button>
                                <button type="button" class="btn btn-primary" id="nextBtn"
                                    onclick="nextPrev(1)">Avançar</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<style>
    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }

</style>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Concluir";
        } else {
            document.getElementById("nextBtn").innerHTML = "Avançar";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

</script>
@endsection
