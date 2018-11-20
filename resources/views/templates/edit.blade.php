@extends('templates.master')
@section('main')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Editar Exame</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('exameRequisitados.index')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
    <br>
    <form action="{{route('exameRequisitados.update',$exameRequisitado->id)}}" method="post" role="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('codigoRequisicao')?' has-error':''}}">
                    <strong>Codigo da Requisicao</strong>
                    <input type="text" name="codigoRequisicao" value="{{ $exameRequisitado->codigoRequisicao }}" class="form-control" placeholder="codigoRequisicao">
                    <span class="text-danger">{{$errors->first('codigoRequisicao')}}</span>
                </div>
            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('codigoFuncionario')?' has-error':''}}">
                    <strong>Codigo do Funcionario</strong>
                    <input type="text" name="codigoFuncionario" value="{{ $exameRequisitado->codigoFuncionario }}" class="form-control" placeholder="codigoFuncionario">
                    <span class="text-danger">{{$errors->first('codigoFuncionario')}}</span>
                </div>
               </div> 
               <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('situacao')?' has-error':''}}">
                    <strong>Situacao</strong>
                    <input type="text" name="situacao" value="{{ $exameRequisitado->situacao }}" class="form-control" placeholder="situacao">
                    <span class="text-danger">{{$errors->first('situacao')}}</span>
                </div>
            </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('codigoAmostra')?' has-error':''}}">
                    <strong>Codigo da Amostra</strong>
                    <input type="text" name="codigoAmostra" value="{{ $exameRequisitado->codigoAmostra}}" class="form-control" placeholder="codigoAmostra">
                    <span class="text-danger">{{$errors->first('codigoAmostra')}}</span>
                </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('tipoAmostra')?' has-error':''}}">
                    <strong>Tipo de amostra</strong>
                    <input type="text" name="tipoAmostra" value="{{ $exameRequisitado->tipoAmostra }}" class="form-control" placeholder="codigoRequisicao">
                    <span class="text-danger">{{$errors->first('tipoAmostra')}}</span>
                </div>
            </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('dataColecta')?' has-error':''}}">
                    <strong>Data da colecta</strong>
                    <input type="text" name="dataColecta" value="{{ $exameRequisitado->dataColecta }}" class="form-control" placeholder="dataColecta">
                    <span class="text-danger">{{$errors->first('dataColecta')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('validado')?' has-error':''}}">
                    <strong>Vaidado</strong>
                    <input type="text" name="validado" value="{{ $exameRequisitado->validado}}" class="form-control" placeholder="validado">
                    <span class="text-danger">{{$errors->first('validado')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('dataResultado')?' has-error':''}}">
                    <strong>Data do resultado</strong>
                    <input type="text" name="dataResultado" value="{{ $exameRequisitado->dataResultado }}" class="form-control" placeholder="dataResultado">
                    <span class="text-danger">{{$errors->first('dataResultado')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('dataSaidaResultado')?' has-error':''}}">
                    <strong>Data de saida do resultado</strong>
                    <input type="text" name="dataSaidaResultado" value="{{ $exameRequisitado->dataSaidaResultado }}" class="form-control" placeholder="dataSaidaResultado">
                    <span class="text-danger">{{$errors->first('dataSaidaResultado')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('resultado')?' has-error':''}}">
                    <strong>Resultado</strong>
                    <input type="text" name="resultado" value="{{ $exameRequisitado->resultado }}" class="form-control" placeholder="resultado">
                    <span class="text-danger">{{$errors->first('resultado')}}</span>
                </div>
            </div>

            </div>

            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>
    </form>
@stop




