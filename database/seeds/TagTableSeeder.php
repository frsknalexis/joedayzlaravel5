<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	$arrayTags = array('tecnología','ciencias','cine','música','religión');
    	$arrayElementos = array(1,2,3,4,5,6,7,8,9,10);
    	foreach($arrayTags as $key => $val){
    		$user_id = $faker->randomElement($arrayElementos);
    		$tag = array(
    			'nombre' 	=> $val,
    			'user_id'	=> $user_id
    		);
    		Tag::create($tag);
    	}        
    }
}
