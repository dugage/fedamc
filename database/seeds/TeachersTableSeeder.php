<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('teachers')->insert([
    		'id' => 1,
        	'name' =>'Sin Asignar',
        	'lastname' => 'Maestro',
        	'email' => 'sinasignar@maestro.com',
        	'idUser' => 1,
    	]);
    }
}
