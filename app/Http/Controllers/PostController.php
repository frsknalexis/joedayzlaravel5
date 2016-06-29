<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Tag;
use DB;

class PostController extends Controller
{
    function index(){
    	$arrayPosts = DB::table('posts')
    						->join('users','posts.user_id','=','users.id')
    						->join('post_tags','posts.id','=','post_tags.post_id')
    						->join('tags','post_tags.tag_id','=','tags.id')
    						->select(DB::raw('posts.*'),DB::raw('users.nombre as creador'),DB::raw('tags.nombre as tag'))
    						->paginate(10);

    	$arrayRecientes = DB::table('posts')
    						->join('users','posts.user_id','=','users.id')
    						->join('post_tags','posts.id','=','post_tags.post_id')
    						->join('tags','post_tags.tag_id','=','tags.id')
    						->select(DB::raw('posts.*'),DB::raw('users.nombre as creador'),DB::raw('tags.nombre as tag'))
    						->orderBy('created_at','desc')
    						->skip(1)
    						->take(5)
    						->get();
    	//return dd($arrayRecientes); 
    	$arrayTags = Tag::all(); 
    	return \View::make('blog.index', array('data' => $arrayPosts, 
    											'arRecientes' => $arrayRecientes,
    											'arTags' => $arrayTags));
    }

}
