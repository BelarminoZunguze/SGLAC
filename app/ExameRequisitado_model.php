<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExameRequisitado_model extends Model
{
    //
    protected $table='examerequisitados';
    protected $primarykKey='id';
    protected $fillable = [ 'codigoFuncionario', 'situacao', 'codigoAmostra', 'tipoAmostra', 'validado', 'dataResultado', 'dataSaidaResultado', 'resultado','codigoPaciente','exame','preco','pagamento' ];
}
