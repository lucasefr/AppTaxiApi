<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'nome' => 'teste',
            'telefone' => str_random(10),
            'password' => bcrypt('secret'),
        ]);
    }
}
