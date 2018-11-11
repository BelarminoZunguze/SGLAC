<?php

use Illuminate\Database\Seeder;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BD::table(Pacientes)->insert(['name'=>str_random(10),
        								'genero'=>str_random(10),
        								'data_nasc'=>str_random(10),
        								'altura'=>str_random(10),
        								'peso'=>str_random(10),
        								'contacto'=>str_random(10),
        								'bi'=>str_random(10),'grupo_sanguineo'=>str_random(10),
        							]);
    }
}
