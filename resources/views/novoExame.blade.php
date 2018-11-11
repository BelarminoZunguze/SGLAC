@extends('templates.modelo')

@section('main')
<div class="row">
            <div class="col-md-6">
                <br>

        
        <form>
            <p>
                <label>Nome</label>
            <input id="nome" type="text" placeholder="Exemplo: HIV" class="form-control comprimento" required>
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
                    <a href="{{ route('novopaciente')}}">Voltar</a></button>
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

<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr> 

</table>


    </div>
</div>
        </div>
        <br>
@stop