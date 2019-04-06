<?php

use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            ['nome'=>'Kelvin', 'telefone'=>'3454-3564', 'email'=>'Kelvin@gmail.com', 'cep'=>72000000, 'logradouro'=>'rua 1', 'complemento'=>'Sol Nascente', 'bairro'=>'Sol Nascente', 'uf'=>'DF', 'municipio'=>'Sol Nascente', 'data_nascimento'=>'1997-04-21'],
            // ['nome'=>'Direito', 'duracao'=>10],
            // ['nome'=>'Redes', 'duracao'=>5],
            // ['nome'=>'Enfermagem', 'duracao'=>8],
            // ['nome'=>'Segurança da Informação', 'duracao'=>5],
            // ['nome'=>'Administração', 'duracao'=>8],
            // ['nome'=>'Jogos Digitais', 'duracao'=>5]
        ]);
    }
}
// $table->increments('id');
//             $table->string('nome', 100);
//             $table->string('telefone', 15);
//             $table->string('email', 50);
//             $table->integer('cep')->nullable();
//             $table->string('logradouro', 100)->nullable();
//             $table->string('complemento', 100)->nullable();
//             $table->string('bairro', 100)->nullable();
//             $table->char('uf', 2)->nullable();
//             $table->integer('municipio')->nullable();
//             $table->timestamp('data_nascimento');