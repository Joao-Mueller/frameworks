<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            ['nome' => 'Bruna Silva', 'email' => 'bruna@ifms.edu.br',
             'data_nascimento' => '2000-02-02', 'curso' => 'engenharia de software']
        ]);
    }
}
