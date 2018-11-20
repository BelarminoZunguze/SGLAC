<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table='pacientes';
    protected $primaryKey='id';
    protected $fillable = ['nome', 'genero', 'data_nasc', 'altura','peso','contacto','bi','grupo_sanguineo'];
    
}
