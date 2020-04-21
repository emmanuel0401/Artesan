<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create(array(
        'username'  => 'admin'
        'email'		=>	'admin@gmail.com'
        'contraseña'=>  Hash::make ('12345')//Hash::make() 
    ));
    }
}
