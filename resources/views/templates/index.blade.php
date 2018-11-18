@extends('templates.master')
@section('main')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Exames requistados</h2>
            </div>
            <<div class="pull-right">
                <a href="{{route('exameRequisitados.create')}}" class="btn btn-success">Novo Exame</a>
            </div>
        </div>
    </div>
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
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
                            <a href="{{route('exameRequisitados.show',$exameRequisitado->id)}}" class="btn btn-info">Detalhes</a>
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