<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
   public function getAllPost()
   {
      $posts = DB::table('posts')->get();
      return view('posts',compact('posts'));
   }

   public function innerJoinCaluse()
   {
   	$request = DB::table('user')
   	           ->join('posts','user_id', '=','posts.user_id')
   	           ->select('user.name','posts.title','posts.body')
   	           ->get();
   	  return $request;
     }

  public function leftJoinCaluse()
   {
   	$result = DB::table('user')
   	           ->leftjoin('posts','user_id', '=','posts.user_id')
   	           ->get();
   	  return $result;
     }

  public function rightJoinCaluse()
   {
   	$result = DB::table('user')
   	           ->rightjoin('posts','user_id', '=','posts.user_id')
   	           ->get();
   	  return $result;
     }
     public function getAllPostsUsingModel()
     {
       $posts = Post::all();
       return $posts;
     }
}
