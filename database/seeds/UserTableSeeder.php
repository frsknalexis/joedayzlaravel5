<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	$faker = Faker\Factory::create();
    	$limit = 10;
    	$password = '123456';

    	for($i=0;$i < $limit; $i++){
    		User::create([
    			'nombre'	=>	$faker->name,
    			'email' 	=>	$faker->unique()->email,
    			'password'	=>	\Hash::make($password)		
    		]);
    	}
    }
}
