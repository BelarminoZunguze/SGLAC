
@extends('templates.modelo')
@section('menu')
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Requisicao</a>
            <a class="w3-bar-item w3-button" href="#" title="">Ver paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Requisicao</a>

 @stop
           
        
 
    
      @section('main')
        <div class="row">
            <div class="col-md-4">
              

        
        <form>
            <br>
                <label>Nome</label>
            <input id="nome" type="text" placeholder="Exemplo: HIV" class="form-control comprimento" required>
            
            <br>
            <label>Genero</label>
            <select id="genero" required class="form-control comprimento">
                <option value="0">Masculino</option>
                <option value="1">Feminino</option>
                <option value="2">Indeterminado</option>
            </select>
            
            <br>
            <label>Data de nascimento</label>
            <input type="date" name="datadenascimento" class="form-control">
            <br>
            <label>Altura</label>
            <input type="text" name="altura" id="altura" class="form-control">
            <br>
            <div class="myButtons">
                <button id="voltar" type="reset" class="btn btn-info" >Limpar</button>
                <button id="salvar" type="submit" class="btn btn-success">Salvar</button>
            </div>
        
    </div>
    <div class="col-md-4">
      <br>
       
             <label>Peso</label>
            <input id="peso" type="number" placeholder="peso" class="form-control comprimento" id="peso">
            
            <br>
            <label>Grupo sanguineo</label>
            <select id="gruposanguineo" required class="form-control" placeholder="gruposanguineo" type="text">
                <option value="0">AB</option>
                <option value="1">O</option>
                <option value="2">OB</option>
            </select>
            
            <br>
            <label>BI</label>
            <input type="text" name="bi" class="form-control" id="bi">
            <br>
            <label>Contacto</label>
            <input type="text" name="contacto" id="contacto" class="form-control">
            <br>

    </div>
</form>
    <div class="col-md-4">
        
            <br>
            <br>
        <table border="1" align="center" width="450" > 

<tr> 

<td>primeira coluna </td> 

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
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

</tr> 

</table>


    
</div>
</div>
</div>
     
  @stop

    



