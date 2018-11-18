@extends('templates.master')
@section('menu')
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Usuario</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Area</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar exame</a>
            <a class="w3-bar-item w3-button" href="#" title="">Ver estatisticas</a>

 @stop
           
        
 
    
      @section('main')

      <div class="row">
            <div class="col-md-4">
              

        
        <form>
            <br>
                <label>Nome</label>
            <input id="nome" type="text" placeholder="Exemplo: HIV" class="form-control comprimento" required>
            
            <br>
            
                <button id="voltar" type="reset" class="btn btn-info" >Limpar</button>
                <button id="salvar" type="submit" class="btn btn-success">Salvar</button>
            </div>

</form>
    <div class="col-md-4">
        
            <br>
            <br>
        <table border="1" align="center" width="450" > 

<tr> 

<td>ID </td> 

<td>Nome</td>



</tr> 

<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>



</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>



</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>


</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>



</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>



</tr> 

</table>


    
</div>
</div>
</div>
     
  @stop