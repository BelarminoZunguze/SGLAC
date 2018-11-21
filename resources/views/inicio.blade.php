
@extends('templates.master')
@section('menu')
            <a class="w3-bar-item w3-button" href="{{route('paciente.index')}}" title="Novo Paciente">Adicionar Paciente</a>
            <a class="w3-bar-item w3-button" href="#" title="">Ver paciente</a>
            <a class="w3-bar-item w3-button" href="{{route('exameRequisitados.index')}}" title="">Adicionar Requisicao</a>
            <a class="w3-bar-item w3-button" href="exameRequisitados.index" title="">Ver requisicoes</a>

 @stop
           
        
 
    
      @section('main')
      <h3>Atencao a escala</h3>

      <p>
      	A partir do dia 25 do corrente mes, passa avigorar uma nova escala, aplamos a atencao dos colaboradores.
      </p>

<h4>Horário de Funcionamento<h4>
<p>Colheitas e Recepção de Amostras: 7h00 – 8h30</p>
<p>Marcação de Análises: 10h00 – 15h00</p>
<p>Levantamento de Resultados: 10h00 – 15h00</p>



<h4>Quem somos</h4>
<p> Laboratório de Análises Clínicas (LAC) é uma rede de laboratórios composta por cinco sectores de rotina de processamento de análises (Bioquímica, Hematologia, Microbiologia, Biologia Molecular e Sala de Colheita e Recepção de amostras) e três Laboratórios de Urgências (Laboratório de Urgência de Pediatria, de SUR e de Baciloscopia e Gram). Além das áreas técnicas compõe uma área adminitrativa e Gabinete de Gestão de Qualidade.</p>

<p>Compete ao serviço de análises clínicas o diagnóstico clínico e actividades complementares de vigilância de doenças de importância em saúde pública, Investigação e apoio nas actividades de Formação.</p>

      @stop