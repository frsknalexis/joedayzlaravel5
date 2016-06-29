<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 100;
        $maxCharsContent = 400;
        $arrayUsersId = array(1,2,3,4,5,6,7,8,9,10);
        for($i = 0; $i < $limit; $i++ ){
        	$titulo 	= $faker->sentence($nbWords = 6, $variableNbWords = true);
        	$slug 		= str_slug($titulo);
        	$contenido 	= $faker->realText($maxCharsContent);
    		$user_id 	= $faker->randomElement($arrayUsersId);
        	$arPost = array(
        		'titulo' 	=> $titulo,
        		'slug'		=> $slug,
        		'contenido'	=> $contenido,
        		'user_id'	=> $user_id,
        	);
        	Post::create($arPost);
        }
    }
}
