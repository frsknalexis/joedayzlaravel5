<?php

use Illuminate\Database\Seeder;
use App\PostTags;

class PostTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 101;
        $arrayTags = array(1,2,3,4,5);
        for($i = 2; $i <= $limit; $i++){ // $i es el ID del Post
        	$numeroTagsxPosts = 1; //numero de tags registrados en la tabla tags
        	$tagId = $faker->randomElement($arrayTags);
    		PostTags::create([
    			'post_id'	=> $i,
    			'tag_id'	=> $tagId,
    			'user_id'	=> $faker->numberBetween(1,10),	
    		]);
        }
    }
}
