@extends('templates.master')

@section('menu')
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Requisicao</a>
            <a class="w3-bar-item w3-button" href="#" title="">Ver paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Requisicao</a>
@stop

@section('main')
<div class="row">
            <div class="col-md-6">
                <br>

        
        <form action="{{ route('paciente.store')}}" method="POST">
            {!! csrf_field() !!}
            <p>
                <label>Nome</label>
            <input id="nome" name="nome" type="text" placeholder="Exemplo: HIV" class="form-control comprimento" required>
            </p>
            <br>
            <label>Preço</label>
            <input id="preco" type="number" placeholder="Exemplo 100,00" class="form-control comprimento" required>
            <br>
            <label>Área</label>
            <select id="area" required class="form-control comprimento">
                <option value="0">Selecione o grupo deste exame</option>
                <option value="1">Bioquímica</option>
                <option value="2">Hormônios</option>
                <option value="3">Microbiologia</option>
            </select>
            <br>
            <label>Situação</label>
            <select id="situacao" required class="form-control comprimento">
                <option value="0">Selecione a situação do exame</option>
                <option value="1">Disponível</option>
                <option value="2">Indisponível</option>
            </select>
            <br>
            <div class="myButtons">
                <button id="voltar" type="button" class="btn btn-info" >
                   Voltar</button>
                <button id="salvar" type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
    <div class="col-md-2">
        <div class="container">
            <br>
            <br>
        <table border="1" align="center" width="500" > 

<tr> 
<td>Nome </td> 


<td>Preco </td>

<td>Area </td>

</tr> 


@foreach($pacientes as $paciente)
<tr>
<td> {{ $paciente->nome }}</td>
<td> {{ $paciente->genero }}</td>
<td> {{ $paciente->data_nasc }}</td>
<td> {{ $paciente->altura}}</td>
</tr>

@endforeach

</table>


    </div>
</div>
        </div>
        <br>
@stop