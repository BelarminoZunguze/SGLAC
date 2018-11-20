
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
              
<form action="{{route('paciente.store')}}" method="post">
       {!! csrf_field() !!}
            <br>
                <strong>Nome</strong>
            <input id="nome" name="nome" type="text" placeholder="nome" class="form-control comprimento" required>
             <span class="text-danger">{{$errors->first('nome')}}</span>


            <br>
             <strong>Genero</strong>
            <select id="genero" required class="form-control comprimento" name="genero">
                <option value="0">Masculino</option>
                <option value="1">Feminino</option>
                <option value="2">Indeterminado</option>
            </select>
             <span class="text-danger">{{$errors->first('genero')}}</span>
            
            <br>
            <strong>Data de nascimento</strong>
            <input type="date" name="data_nasc" class="form-control" id="data_nasc">
            <span class="text-danger">{{$errors->first('data_nasc')}}</span>
            <br>
            
            <strong>Altura</strong>
            <input type="number" name="altura" id="altura" class="form-control">
            <span class="text-danger">{{$errors->first('altura')}}</span>
            <br>
            <div class="myButtons">
                <button id="voltar" type="reset" class="btn btn-info" >Limpar</button>
                <button id="salvar" type="submit" class="btn btn-success">Salvar</button>
            </div>
        
    </div>
    <div class="col-md-4">
      <br>
       
             <strong>Peso</strong>
            <input id="peso" type="number" placeholder="peso" class="form-control comprimento" name="peso">
            <span class="text-danger">{{$errors->first('peso')}}</span>
            <br>
            <strong>Contacto</strong>
            <input type="text" name="contacto" id="contacto" class="form-control">
            <span class="text-danger">{{$errors->first('contacto')}}</span>
            <br>
            <strong>BI</strong>
            <input type="text" name="bi" class="form-control" id="bi">
            <span class="text-danger">{{$errors->first('bi')}}</span>
            <br>
            <strong>Grupo sanguineo</strong>
            <select id="grupo_sanguneo" required class="form-control" placeholder="gruposanguineo" type="text" name="grupo_sanguneo">
                <option value="0">AB</option>
                <option value="1">O</option>
                <option value="2">OB</option>
            </select>
            <span class="text-danger">{{$errors->first('grupo_sanguneo')}}</span>
            <br>
            

            <br>

    </div>
</form>

 <div class="col-md-4">
        
            <br>
            <br>
 @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
               
                
                <th>Nome</th>
                <th>Genero</th>
                <th>Nascimento</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Contacto</th>
                <th>BI</th>
                <th>Gr.Sanguineo</th>
               
                <th width="280px">Accao</th>
            </tr>
            </thead>
            <tbody>
            @foreach($paciente as $paciente)

                <tr>
                 
                    <td>{{$paciente->nome}}</td>
                    <td>{{$paciente->genero}}</td>
                     <td>{{$paciente->data_nasc}}</td>
                    <td>{{$paciente->altura}}</td>
                     <td>{{$paciente->peso}}</td>
                    <td>{{$paciente->contacto}}</td>
                     <td>{{$paciente->bi}}</td>
                    <td>{{$paciente->grupo_sanguineo}}</td>
                    <td>
                        <form action="{{route('paciente.destroy',$paciente->id)}}" method="post" role="form">
                            
                            <a href="{{route('paciente.edit',$paciente->id)}}" class="btn btn-primary">Editar</a>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Apagar</button>
                        </form>


                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>



 </div>           
   
     
  @stop

    



