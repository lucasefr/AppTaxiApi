<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuarios')->insert([
            'nome' => str_random(10),
            'email' => str_random(10).'lucasefr@gmail.com',
            'idAparelho'=> str_random(10),
            'placaDoCarro'=> str_random(10),
            'telefone'=> str_random(10),
        ]);
    }
}
