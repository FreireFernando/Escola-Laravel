<?php

use Illuminate\Database\Seeder;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplinas')->insert([
            ['nome'=>'Web I', 'curso_id'=>1],
            ['nome'=>'Web II', 'curso_id'=>7],
            ['nome'=>'Programação para Dispositivos Móveis', 'curso_id'=>3],
            ['nome'=>'Direito Civil', 'curso_id'=>5],
            ['nome'=>'Direito Penal', 'curso_id'=>6],
            ['nome'=>'Direito Trabalhista', 'curso_id'=>2],
        ]);
    }
}
