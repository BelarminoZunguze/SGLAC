
@extends('templates.master')
@section('menu')
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Requisicao</a>
            <a class="w3-bar-item w3-button" href="#" title="">Ver paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Requisicao</a>

 @stop
           
        
 
    
      @section('main')
        <div class="row">
            <div class="col-md-4">
              

        
       
            
        <form action="{{ route('paciente.store')}}" method="POST">
            {!! csrf_field() !!}
            
                <label>Paciente</label>
            <input id="nome" name="nome" type="text" placeholder="Exemplo: HIV" class="form-control comprimento" required>
            
			
            
            
            <br>
            <label>Data</label>
            <input type="date" name="datadenascimento" class="form-control">
            <br>
            <label>Estado</label>
            <input type="text" name="altura" id="altura" class="form-control">
            <br>
            <div class="myButtons">
                <button id="voltar" type="reset" class="btn btn-info" >Limpar</button>
                <button id="procurar" type="submit" class="btn btn-success">Procurar</button>
            </div>
        
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

<td>terceira coluna </td>

</tr> 

<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

<td>terceira coluna </td>

</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

<td>terceira coluna </td>

</tr>
<tr> 

<td> primeira coluna</td>

<td>segunda coluna </td>

<td>terceira coluna </td>

<td>terceira coluna </td>

</tr>




</table>

            <br>
                <div class="myButtons">
                 <button id="voltar" type="reset" class="btn btn-info" >Voltar</button>
                 <button id="imprimir" type="submit" class="btn btn-success">Imprimir</button>
                </div>
    
</div>
                             
                  
</div>
      
                 
      
</div>
 
     
  @stop

    