<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'Sin Asignar',
            'email' => 'sinasignar@gmail.com',
            'password' => bcrypt('secret'),
        ]);

    	User::create([
    		'name' => 'fedamc',
            'email' => 'demo@demo.com',
            'password' => bcrypt('secret'),
    	]);

       /* User::create([
            'id' => 0,
            'name' => 'Sin Asignar',
            'email' => 'sinasignar@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        */
    }
}
