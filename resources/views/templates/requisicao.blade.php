
@extends('templates.master')
@section('menu')
<<<<<<< HEAD
            <a class="w3-bar-item w3-button" href="{{route('paciente.index')}}" title="Novo Paciente">Adicionar Paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Ver paciente</a>
            <a class="w3-bar-item w3-button" href="{{route('exameRequisitados.create')}}" title="">Adicionar Requisicao</a>
            <a class="w3-bar-item w3-button" href="exameRequisitados.index" title="">Ver requisicoes</a>
=======
            <a class="w3-bar-item w3-button" href="{{route('exameRequisitados.index')}}" title="">Adicionar Paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Requisicao</a>
            <a class="w3-bar-item w3-button" href="#" title="">Ver Requisicoes</a>
>>>>>>> 0f889baff3d5f24c09ecb0c9adc2783dd76e5349
            

 @stop
           
        
 
    
      @section('main')
        <div class="row">
            <div class="col-md-4">
              
<form action="{{route('exameRequisitados.store')}}" method="post">
       {!! csrf_field() !!}
            <br>
                <strong>Id do paciente</strong>
            <input id="codigoPaciente" name="id" type="number" placeholder="id do paciente" class="form-control comprimento" >
             <span class="text-danger">{{$errors->first('codigoPaciente')}}</span>


            <br>
             <strong>Exame</strong>
            <select id="exame" required class="form-control comprimento" name="exame">
                <option value="HIV/SIDA">HIV/SIDA</option>
                <option value="tuberculose">tuberculose</option>
                <option value="cancro">cancro</option>
            </select>
             <span class="text-danger">{{$errors->first('exame')}}</span>
            
            <br>
            <strong>Preco</strong>
            <input type="number" name="preco" class="form-control" id="preco">
            <span class="text-danger">{{$errors->first('preco')}}</span>
            <br>
            
            <strong>Funcionario</strong>
            <input type="CodigoFuncionario" name="CodigoFuncionario" id="CodigoFuncionario" class="form-control">
            <span class="text-danger">{{$errors->first('CodigoFuncionario')}}</span>
            <br>
            <div class="myButtons">
                <button id="voltar" type="reset" class="btn btn-info" >Limpar</button>
                <button id="salvar" type="submit" class="btn btn-success">Salvar</button>
            </div>
        
    </div>

</form>


        
            <br>
            <br>
 
     
  @stop

    



