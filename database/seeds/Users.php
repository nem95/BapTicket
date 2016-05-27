<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Chatti',
            'surname' => 'Naïm',
            'email' => 'naiim.chatti@gmail.com',
            'password' => bcrypt('azerty'),
            'remember_token' => str_random(10)
        ]);
        DB::table('users')->insert([
            'name' => 'naim',
            'surname' => 'naim',
            'email' => 'nem.95@hotmail.fr',
            'password' => bcrypt('azerty'),
            'remember_token' => str_random(10)
        ]);
    }
}
