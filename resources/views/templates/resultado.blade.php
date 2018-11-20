
@extends('templates.master')
@section('menu')
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Requisicao</a>
            <a class="w3-bar-item w3-button" href="#" title="">Ver paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Adicionar Requisicao</a>

 @stop

@section('main')

<div class="box">
	<form >
		<strong>Insira o id da requisicao</strong>
		<input type="number" name="id" id="id" placeholder="Insira o id da requisicaoi" class="form control">
		
	<button type="submit">Submeter</button>	
	</form>

	
</div>
<div class="container-responsive">
	<table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                
                <th>Situacao</th>
                <th>c.Amostra</th>
                <th>T.Amostra</th>
                <th>Data.colecta</th>
                <th>Validado</th>
                <th>DataResult</th>
                <th>DataSaiRe</th>
                <th>Resultado</th>
               
                <th width="280px">Accao</th>
            </tr>
            </thead>
            <tbody>
            @foreach($exameRequisitados as $exameRequisitado)

                <tr>
                    <td>{{$exameRequisitado->id}}</td>
                    <td>{{$exameRequisitado->situacao}}</td>
                    <td>{{$exameRequisitado->codigoAmostra}}</td>
                     <td>{{$exameRequisitado->tipoAmostra}}</td>
                    <td>{{$exameRequisitado->dataColecta}}</td>
                     <td>{{$exameRequisitado->validado}}</td>
                    <td>{{$exameRequisitado->dataResultado}}</td>
                     <td>{{$exameRequisitado->dataSaidaResultado}}</td>
                    <td>{{$exameRequisitado->resultado}}</td>
                    <td>
                        <form action="{{route('exameRequisitados.destroy',$exameRequisitado->id)}}" method="post" role="form">
                            
                            <a href="{{route('exameRequisitados.edit',$exameRequisitado->id)}}" class="btn btn-primary">Editar</a>
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